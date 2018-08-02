function [recommendation]=PredictionProcess_UvaHigh(plant_level, place, temprature, rainfall, humility, usd, fuel)

%DB Service Port, Username, Password
host = 'localhost';
hostusername = 'root';
hostpassword = '';
%Database Name
databasename = 'factors';

%JDBC Parameters
jdbcString = sprintf('jdbc:mysql://%s/%s', host, databasename);
jdbcDriver = 'com.mysql.jdbc.Driver';
 %Now making DB connection Object
dbConn = database(databasename, hostusername, hostpassword, jdbcDriver, jdbcString);
 
%checking Connection Status
dbStatus = isopen(dbConn);
if (dbStatus==0)
    msg = sprintf('Failed To Establish Connection.\nReason: %s', dbConn.Message);
    msgbox(msg);
    return
else 
    PlantLevel=lower(plant_level);
    Place=lower(place);
    TableName=strcat(Place,'_',PlantLevel);
    selectquery=['Select * from '  TableName];
    
    curs1=exec(dbConn,selectquery);
    curs=fetch(curs1);
    allData=curs1.Data;    

    allData=transpose(allData);
   
    targets=str2double(allData(6,:));
    inputs=str2double(allData(1:5,:));
                           
    %create feedforward neural network
    net=feedforwardnet(10);

    %train the neural network with the training inputs and targets
    net=train(net,inputs,targets);

    %view the network
    view(net);
    X=[temprature; rainfall; humility; usd; fuel];
    %put the input
    recommendation=net(X);
    
    disp('Prediction Output:');
    disp(recommendation);
    %check neural network performance
    performance=perform(net,recommendation,targets);

            
    
end