function [recommendation]=predict(plant_level, place, temprature, rainfall, humility, usd, fuel)

%DB Service Port, Username, Password
    host = 'localhost';
    hostusername = 'root';
    hostpassword = '';
    databasename = 'factors';%Database Name

    %JDBC Parameters
    jdbcString = sprintf('jdbc:mysql://%s/%s', host, databasename);
    jdbcDriver = 'com.mysql.jdbc.Driver'; %JDBC driver

    %Now making DB connection Object
    dbConn = database(databasename, hostusername, hostpassword, jdbcDriver, jdbcString);
 
    %checking Connection Status
    dbStatus = isopen(dbConn);
    if (dbStatus==0)
        msg = sprintf('Failed To Establish Connection.\nReason: %s', dbConn.Message);
        msgbox(msg);
        return
    else
        PlantLevel=lower(plant_level);%convert to lowercase
        Place=lower(place);%convert to lowercase
           
        TableName=strcat(Place,'_',PlantLevel);%creating the tablename (dynamic)
    
        selectquery_factors=['Select * from ' TableName ];%SQLquery will work for different tablename
        
        curs_factors=exec(dbConn,selectquery_factors);
        curs_factors1=fetch(curs_factors);
        factors=curs_factors.Data; %data is stored into the variable
    
        allData=transpose(factors);%convert column to row and row to column
   
        targets=str2double(allData(6,:)); %convert string to double data for targets -> Price
  
        inputs=str2double(allData(1:5,:));%convert string to double data for inputs
                           
        %create feedforward neural network
        net=feedforwardnet(10);%initial dum net or empty net

        %train the neural network with the training inputs and targets
        net=train(net,inputs,targets);%intelligent net

        %view the network
        view(net);
        
        X=[temprature; rainfall; humility; usd; fuel]; %input actors to predict the price 
    
        %put the input
        recommendation=net(X);%output is the predicted price 
    
        %disp('Prediction Output:');
        %disp(recommendation);
        
        %check neural network performance
        performance=perform(net,recommendation,targets);
    end
end