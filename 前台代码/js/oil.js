       <!--定义了城市的二维数组，里面的顺序跟省份的顺序是相同的。通过selectedIndex获得省份的下标值来得到相应的城市数组-->    
        var city=[    
            ["90号","93号","95号","97号","98号","100号"],  
            ["5号","0号","-10号","-20号","-35号","-50号"],
			["CNG"],
			["LPG"],
			["甲醇","乙醇"]
            
        ];    
        function getCity(){    
            //获得省份下拉框的对象    
            var sltProvince=document.form1.province;  
            //获得城市下拉框的对象    
            var sltCity=document.form1.city;    
            //得到对应省份的城市数组    
            var provinceCity=city[sltProvince.selectedIndex - 1];    
            //清空城市下拉框，仅留提示选项    
            sltCity.length=1;    
            //将城市数组中的值填充到城市下拉框中    
            for(var i=0;i<provinceCity.length;i++){    
                sltCity[i+1]=new Option(provinceCity[i],provinceCity[i]);    
                }    
        }    
		
		
             