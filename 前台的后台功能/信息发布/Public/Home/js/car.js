function Location() {
	this.items	= {
	'0':{1:'奥迪'},
	'0,1':{2:'A1',6:'A3',18:'A4',23:'A5',50:'A6',64:'A8L'},
	'0,1,2':{3:'1.4 TFSI 7档双离合 Urban款',4:'1.4 TFSI 7档双离合 Ego款',5:'1.4 TFSI 7档双离合 Ego plus款'},
	'0,1,6':{7:'Sportback 1.4T 自动 舒适型',8:'Sportback 1.4T 自动 豪华型',9:'Sportback 1.8T 自动 豪华型',10:'Sportback 1.8T 自动 尊贵型',11:'Sportback 1.4T 自动 技术型',12:'Sportback 1.4T 舒适型',13:'Sportback 1.4T 豪华型',14:'Sportback 首发限量版舒适型',15:'Sportback 首发限量版豪华型',16:'Sportback 1.8T 豪华型',17:'Sportback 1.8T 尊贵型'},
	'0,1,18':{19:'3.0 quattro敞蓬',20:'1.8T',21:'3.0L quattro',22:'2.0'},
	'0,1,23':{24:'Coupe 2.0T CVT',25:'Coupe 2.0T 双离合 quattro',26:'Coupe 3.0T 双离合 quattro',27:'Cabriolet 2.0T',28:'Cabriolet 2.0T',29:'Cabriolet 2.0T quattro',30:'Sportback 2.0T CVT',31:'Sportback 2.0T 双离合 quattro',32:'Sportback 3.0T 双离合 quattro',33:'Cabriolet 2.0T CVT无级变速',34:'Sportback 2.0T 舒适型 CVT无级变速',35:'Sportback 2.0T 技术型 CVT无级变速',36:'Sportback 2.0T 豪华型 CVT无级变速',37:'Coupe 3.2 quattro 手自一体',38:'Coupe 2.0T CVT无级变速',39:'Coupe 2.0T 风尚版 CVT无级变速',40:'Coupe 2.0T',41:'Coupe 2.0T 风尚版',42:'Coupe 3.2 quattro',43:'Sportback 2.0T 舒适型',44:'Sportback 2.0T 技术型',45:'Sportback 2.0T 豪华型',46:'Cabriolet 2.0T',47:'3.2 coupe',48:'3.2 coupe quattro',49:'2.0T coupe'},
	'0,1,50':{51:'A6 3.0L',52:'2.8L  手动',53:'2.0T FSI基本型',54:'2.0T FSI标准型(手动)',55:'2.0T FSI标准型(自动)',56:'2.0T FSI标准型(自动)',57:'2.4 技术型',58:'2.4 舒适型',59:'2.4 尊贵型',60:'2.8FSI 舒适娱乐型',61:'2.8FSI 尊享型',62:'3.2FSI quattro 舒适娱乐型',63:'3.2FSI quattro 豪华型'},
	'0,1,64':{65:'45 TFSI quattro 舒适型',66:'45 TFSI quattro 豪华型',67:'50 TFSI quattro 舒适型',68:'50 TFSI quattro 豪华型',69:'50 TFSI quattro 尊贵型',70:'6.3 FSI W12 quattro 旗舰型',71:'3.0 TFSI high',72:'quattro 尊贵型(245kW)',73:'3.0 TFSI quattro 豪华型(245kW)',74:'3.0 TFSI quattro 舒适型(245kW)',75:'3.0 TFSI quattro 豪华型(213KW)',76:'3.0 TFSI quattro 舒适型(213kW)',77:'6.3 FSI W12 quattro 旗舰型',78:'百年纪念版 3.0 FSI',79:'百年纪念版 6.0 W12 quattro',80:'2.8 FSI 标准型',81:'3.0 FSI 标准型',82:'3.0 FSI 豪华型',83:'3.0 FSI 尊贵型',84:'4.2 FSI quattro 尊贵型',85:'6.0 W12 quattro 旗舰型',86:'6.0 W12 quattro 专享尊崇型',87:'3.0 FSI 标准型',88:'3.0 FSI 豪华型',89:'3.0 FSI 尊贵型',90:'2.8FSI 标准型',91:'4.2 FSI quattro 尊贵型',92:'6.0 W12 quattro 专享尊崇型',93:'3.2 FSI尊贵型',94:'2.8FSI 豪华型',95:'3.2FSI 标准型',96:'3.2FSI 豪华型',97:'6.0 W12 quattro 旗舰型',98:'3.2 FSI技术型',99:'3.7 quattro',100:'3.0',101:'4.2 FSI quattro至尊型',102:'6.0 quattro',103:'2.8 quattro',104:'4.2 quattro',105:'3.0 TFSI quattro 豪华型'}
	};
}

Location.prototype.find	= function(id) {
	if(typeof(this.items[id]) == "undefined")
		return false;
	return this.items[id];
}

Location.prototype.fillOption	= function(el_id , loc_id , selected_id) {
	var el	= $('#'+el_id); 
	var json	= this.find(loc_id); 
	if (json) {
		var index	= 1;
		var selected_index	= 0;
		$.each(json , function(k , v) {
			var option	= '<option value="'+k+'">'+v+'</option>';
			el.append(option);
			
			if (k == selected_id) {
				selected_index	= index;
			}
			
			index++;
		})
		//el.attr('selectedIndex' , selected_index); 
	}
	el.select2("val", "");
}

