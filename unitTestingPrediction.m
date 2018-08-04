function [recommendation]=unitTestingPrediction()
  
        %test case 1****************************************************************
        plant_level='High'; %input the plantlevel 
        place='Uva';%input the place 
        temprature=21.70; %input the temperature 
        rainfall=134.40; %input the rainfall 
        humility=63.00;%input the humility 
        usd=122.12; %input the usd 
        fuel=167.00;%input the fuel 
        
        %calling the prediction function with the input factors
        recommendation=predict(plant_level, place, temprature, rainfall, humility, usd, fuel);
        
        %ErrorRate calculation ((ActualPrice-PredictedPrice)/ActualPrice)*100
        value=recommendation-304.86;
        if value<0 %check whether it is negative
            value=value*-1;% convert it to positive value
        end
        PercentError = (value/recommendation)*100 %error rate
        if (PercentError <20)
            disp("Test Case 1: (Uva_High): Passed");
        else
            disp("Test Case 1: (Uva_High): Failed");
        end
        
        
        %Test case 2 *****************************************************
        plant_level='Low'; %convert the plantlevel to string datatype
        place='Uva';%convert the place to string datatype
        %cannot convert from cell to double. cell -> string ->double
        temprature=21.70; %convert the temperature to double datatype
        rainfall=207.30; %convert the rainfall to double datatype
        humility=85.00;%convert the humility to double datatype
        usd=132.07; %convert the usd to double datatype
        fuel=167.00;%convert the fuel to double datatype
        
        recommendation=predict(plant_level, place, temprature, rainfall, humility, usd, fuel);
        
        value=recommendation-365.15;
        if value<0
            value=value*-1;
        end
        PercentError = (value/recommendation)*100
        if (PercentError <20)
            disp("Test Case 2: (Uva_Low): Passed");
        else
            disp("Test Case 2: (Uva_Low): Failed");
        end
    
         %test case 3****************************************************************
        plant_level='Medium'; %input the plantlevel 
        place='Uva';%input the place 
        temprature=21.70; %input the temperature 
        rainfall=207.3; %input the rainfall 
        humility=85.00;%input the humility 
        usd=132.07; %input the usd 
        fuel=167.00;%input the fuel 
        
        %calling the prediction function with the input factors
        recommendation=predict(plant_level, place, temprature, rainfall, humility, usd, fuel);
        
        %ErrorRate calculation ((ActualPrice-PredictedPrice)/ActualPrice)*100
        value=recommendation-318.31;
        if value<0 %check whether it is negative
            value=value*-1;% convert it to positive value
        end
        PercentError = (value/recommendation)*100 %error rate
        if (PercentError <20)
            disp("Test Case 3: (Uva_Medium): Passed");
        else
            disp("Test Case 3: (Uva_Medium): Failed");
        end
        
        %test case 4****************************************************************
        plant_level='High'; %input the plantlevel 
        place='Western';%input the place 
        temprature=21.70; %input the temperature 
        rainfall=134.40; %input the rainfall 
        humility=63.00;%input the humility 
        usd=122.12; %input the usd 
        fuel=167.00;%input the fuel 
        
        %calling the prediction function with the input factors
        recommendation=predict(plant_level, place, temprature, rainfall, humility, usd, fuel);
        
        %ErrorRate calculation ((ActualPrice-PredictedPrice)/ActualPrice)*100
        value=recommendation-342.08;
        if value<0 %check whether it is negative
            value=value*-1;% convert it to positive value
        end
        PercentError = (value/recommendation)*100 %error rate
        if (PercentError <20)
            disp("Test Case 4: (Western_High): Passed");
        else
            disp("Test Case 4: (Western_High): Failed");
        end
        
        
        %Test case 5 *****************************************************
        plant_level='Low'; %convert the plantlevel to string datatype
        place='Western';%convert the place to string datatype
        %cannot convert from cell to double. cell -> string ->double
        temprature=21.70; %convert the temperature to double datatype
        rainfall=207.30; %convert the rainfall to double datatype
        humility=85.00;%convert the humility to double datatype
        usd=132.07; %convert the usd to double datatype
        fuel=167.00;%convert the fuel to double datatype
        
        recommendation=predict(plant_level, place, temprature, rainfall, humility, usd, fuel);
        
        value=recommendation-365.15;
        if value<0
            value=value*-1;
        end
        PercentError = (value/recommendation)*100
        if (PercentError <20)
            disp("Test Case 5: (Western_Low): Passed");
        else
            disp("Test Case 5: (Western_Low): Failed");
        end
    
         %test case 6****************************************************************
        plant_level='Medium'; %input the plantlevel 
        place='Western';%input the place 
        temprature=21.70; %input the temperature 
        rainfall=207.3; %input the rainfall 
        humility=85.00;%input the humility 
        usd=132.07; %input the usd 
        fuel=167.00;%input the fuel 
        
        %calling the prediction function with the input factors
        recommendation=predict(plant_level, place, temprature, rainfall, humility, usd, fuel);
        
        %ErrorRate calculation ((ActualPrice-PredictedPrice)/ActualPrice)*100
        value=recommendation-314.66;
        if value<0 %check whether it is negative
            value=value*-1;% convert it to positive value
        end
        PercentError = (value/recommendation)*100 %error rate
        if (PercentError <20)
            disp("Test Case 6: (Western_Medium): Passed");
        else
            disp("Test Case 6: (Western_Mednium): Failed");
        end
        
    
end
