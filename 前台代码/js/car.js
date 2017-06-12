function Location() {
	this.items	= {
	'0':{1:'奥迪',391:'奥克斯',402:'阿尔法·罗米欧',410:'阿斯顿·马丁'},
	'0,1':{2:'A1(进口)',6:'A3(进口)',18:'A4(进口)',23:'A5(进口)',50:'A6(进口)',64:'A8L(进口)',106:'Allroad quattro(进口)',111:'Q5(进口)',118:'Q7(进口)',161:'R8(进口)',166:'S4',168:'S5(进口)',179:'S8(进口)',181:'TT(进口)',200:'100',206:'200',211:'A4',246:'A4L',275:'A6L',385:'Q5'},
	'0,1,2':{3:'1.4 TFSI 7档双离合 Urban款',4:'1.4 TFSI 7档双离合 Ego款',5:'1.4 TFSI 7档双离合 Ego plus款'},
	'0,1,6':{7:'Sportback 1.4T 自动 舒适型',8:'Sportback 1.4T 自动 豪华型',9:'Sportback 1.8T 自动 豪华型',10:'Sportback 1.8T 自动 尊贵型',11:'Sportback 1.4T 自动 技术型',12:'Sportback 1.4T 舒适型',13:'Sportback 1.4T 豪华型',14:'Sportback 首发限量版舒适型',15:'Sportback 首发限量版豪华型',16:'Sportback 1.8T 豪华型',17:'Sportback 1.8T 尊贵型'},
	'0,1,18':{19:'3.0 quattro敞蓬',20:'1.8T',21:'3.0L quattro',22:'2.0'},
	'0,1,23':{24:'Coupe 2.0T CVT',25:'Coupe 2.0T 双离合 quattro',26:'Coupe 3.0T 双离合 quattro',27:'Cabriolet 2.0T',28:'Cabriolet 2.0T',29:'Cabriolet 2.0T quattro',30:'Sportback 2.0T CVT',31:'Sportback 2.0T 双离合 quattro',32:'Sportback 3.0T 双离合 quattro',33:'Cabriolet 2.0T CVT无级变速',34:'Sportback 2.0T 舒适型 CVT无级变速',35:'Sportback 2.0T 技术型 CVT无级变速',36:'Sportback 2.0T 豪华型 CVT无级变速',37:'Coupe 3.2 quattro 手自一体',38:'Coupe 2.0T CVT无级变速',39:'Coupe 2.0T 风尚版 CVT无级变速',40:'Coupe 2.0T',41:'Coupe 2.0T 风尚版',42:'Coupe 3.2 quattro',43:'Sportback 2.0T 舒适型',44:'Sportback 2.0T 技术型',45:'Sportback 2.0T 豪华型',46:'Cabriolet 2.0T',47:'3.2 coupe',48:'3.2 coupe quattro',49:'2.0T coupe'},
	'0,1,50':{51:'A6 3.0L',52:'2.8L  手动',53:'2.0T FSI基本型',54:'2.0T FSI标准型(手动)',55:'2.0T FSI标准型(自动)',56:'2.0T FSI标准型(自动)',57:'2.4 技术型',58:'2.4 舒适型',59:'2.4 尊贵型',60:'2.8FSI 舒适娱乐型',61:'2.8FSI 尊享型',62:'3.2FSI quattro 舒适娱乐型',63:'3.2FSI quattro 豪华型'},
	'0,1,64':{65:'45 TFSI quattro 舒适型',66:'45 TFSI quattro 豪华型',67:'50 TFSI quattro 舒适型',68:'50 TFSI quattro 豪华型',69:'50 TFSI quattro 尊贵型',70:'6.3 FSI W12 quattro 旗舰型',71:'3.0 TFSI high',72:'quattro 尊贵型(245kW)',73:'3.0 TFSI quattro 豪华型(245kW)',74:'3.0 TFSI quattro 舒适型(245kW)',75:'3.0 TFSI quattro 豪华型(213KW)',76:'3.0 TFSI quattro 舒适型(213kW)',77:'6.3 FSI W12 quattro 旗舰型',78:'百年纪念版 3.0 FSI',79:'百年纪念版 6.0 W12 quattro',80:'2.8 FSI 标准型',81:'3.0 FSI 标准型',82:'3.0 FSI 豪华型',83:'3.0 FSI 尊贵型',84:'4.2 FSI quattro 尊贵型',85:'6.0 W12 quattro 旗舰型',86:'6.0 W12 quattro 专享尊崇型',87:'3.0 FSI 标准型',88:'3.0 FSI 豪华型',89:'3.0 FSI 尊贵型',90:'2.8FSI 标准型',91:'4.2 FSI quattro 尊贵型',92:'6.0 W12 quattro 专享尊崇型',93:'3.2 FSI尊贵型',94:'2.8FSI 豪华型',95:'3.2FSI 标准型',96:'3.2FSI 豪华型',97:'6.0 W12 quattro 旗舰型',98:'3.2 FSI技术型',99:'3.7 quattro',100:'3.0',101:'4.2 FSI quattro至尊型',102:'6.0 quattro',103:'2.8 quattro',104:'4.2 quattro',105:'3.0 TFSI quattro 豪华型'},
	'0,1,106':{107:'Allroad 2.7T quattro',108:'Allroad4.2Lquattro',109:'2.4 Quattro 5AT 四轮驱动',110:'3.0 Quattro 5AT 四轮驱动'},
	'0,1,111':{112:'3.2 FSI 运动款',113:'3.2 FSI 越野款',114:'2.0T 首发限量版 运动款',115:'2.0T 首发限量版 越野款',116:'3.2 运动款',117:'3.2 越野款'},
	'0,1,118':{119:'3.0 TFSI quattro(200kW)进取型',120:'3.0 TFSI',121:'quattro(200kW)技术型',122:'3.0 TFSI quattro(200kW)舒适型',123:'3.0 TFSI quattro(200kW)专享型',124:'3.0 TFSI quattro(245kW)技术型',125:'3.0 TFSI quattro(245kW)舒适型',126:'3.0 TFSI quattro(245kW)专享型',127:'TDI V6 3.0 柴油',128:'3.0 TDI quattro 领先型',129:'3.0 TDI quattro 专享型',130:'3.0 TFSI quattro(200kW) 进取型',131:'3.0 TFSI quattro(200kW) 技术型',132:'3.0 TFSI quattro(200kW) 舒适型',133:'3.0 TFSI quattro(200kW) 专享型',134:'3.0 TFSI quattro(245kW) 技术型',135:'3.0 TFSI quattro(245kW) 舒适型',136:'3.0 TFSI quattro(245kW) 专享型',137:'3.0 TDI领先型',138:'3.6 FSI基本型',139:'3.6 FSI技术型',140:'3.6 FSI舒适型',141:'3.6 FSI豪华型',142:'4.2 FSI技术型',143:'4.2 FSI豪华型',144:'3.0 TDI quattro 领先型运动典藏版',145:'3.6 FSI quattro 技术型运动典藏版',146:'3.6 FSI quattro 技术型越野典藏版',146:'3.6 FSI quattro 舒适型运动典藏版',147:'3.6 FSI quattro 舒适型越野典藏版',148:'4.8L 120英寸加长车',149:'6.0 V12 TDI旗舰型',150:'3.6 FSI quattro 技术型 风尚版',151:'3.6 FSI quattro 舒适型 风尚版',152:'3.6 FSI quattro 技术型 越野版',153:'3.6 FSI quattro 舒适型 越野版',154:'3.6 FSI quattro 技术型',155:'3.6 FSI quattro 舒适型',156:'3.6 FSI quattro 豪华型',157:'4.2 FSI quattro 舒适型',158:'4.2 FSI quattro 豪华型',159:'3.6 FSI quattro 基本型',160:'4.2 FSI quattro 技术型'},
	'0,1,161':{162:'Spyder 5.2L FSI quattro',163:'Coupe V10 5.2L FSI quattro',164:'5.2 FSI quattro',165:'4.2L FSI quattro'},
	'0,1,166':{167:'S4 4.2 四驱'},
	'0,1,168':{169:'Sportback 3.0',170:'Coupe 3.0',171:'Cabriolet 3.0',172:'Cabriolet 3.0 双离合',173:'Sportback 3.0 双离合',174:'Coupe 4.2 手自一体',175:'Coupe2010',176:'Sportback',177:'Cabriolet',178:'coupe2009'},
	'0,1,179':{180:'5.2L FSI quattro'},
	'0,1,181':{182:'TT Roadster 2.0 TFSI S tronic典雅版',183:'TT Roadster 2.0 TFSI S tronic quattro典雅版',184:'TT Coupé 2.0 TFSI S tronic',185:'TT Roadster 2.0 TFSI S tronic',186:'TTS Coupe 2.0 TFSI quattro S tronic',187:'TTS Roadster 2.0 TFSI quattro S tronic',188:'TT Coupe 2.0 TFSI S tronic quattro',189:'TT Roadster 2.0 TFSI S tronic quattro',190:'典藏版 2.0TFSI',191:'TTS Coupe 2.0 TFSI quattro S tronic',192:'TTS Roadster 2.0TFSI quattro S tronic',193:'TT Roadster 2.0 TFSI S tronic',194:'TT coupe 3.2quattro',195:'TT Coupe 2.0 TFSI S tronic',196:'3.2 quattro S tronic',197:'TT 3.2roadster',198:'TT coupe 1.8T quattro',199:'TT Roadster1.8T quattro'},
	'0,1,200':{201:'1.8L',202:'2.0L',203:'2.2L（五缸）',204:'2.6L（六缸）',205:'V6 2.4L MT'},
	'0,1,206':{207:'2.2L MT',208:'2.6L MT',209:'1.8T',210:'2.4L'},
	'0,1,211':{212:'1.8T 手动 舒适型',213:'1.8T豪华型',214:'2.0TFSI S line(个性风格版)',215:'2.0T FSI舒适型',216:'3.0 quattro旗舰型',217:'1.8T 手动 舒适型',218:'2.0T FSI 标准型',219:'1.8T手动基本型',220:'1.8T自动基本型',221:'2.0TFSI尊享型',222:'3.0 quattro自动旗舰型',223:'1.8T自动舒适型',224:'1.8T自动舒适型(+)',225:'1.8T自动领先型',226:'1.8T自动豪华型',227:'2.0TFSI标准型',228:'1.8T舒适型（自动）',229:'2.0TFSI豪华型',230:'1.8T S-line（个性风格版）',231:'1.8T手动基本型',232:'1.8T自动舒适型',233:'2.4L自动舒适型',234:'2.4L自动舒适运动型',235:'2.4L自动舒适尊享型',236:'1.8T自动基本型',237:'1.8T自动技术领先型',238:'3.0quattro自动豪华尊享型',239:'A4 3.0 quattro敞蓬',240:'1.8T自动基本型',241:'1.8T自动舒适加温型',242:'3.0quattro自动舒适型',243:'3.0quattro舒适加温型',244:'3.0quattro自动舒适娱乐型',245:'3.0quattro舒适尊享型'},
	'0,1,246':{247:'1.8 TFSI 自动 舒适型',248:'2.0 TFSI(132kW) 标准型',248:'2.0 TFSI(132kW) 舒适型',250:'2.0 TFSI(132kW) 技术型',251:'2.0 TFSI(132kW) 豪华型',252:'2.0 TFSI(155kW) 运动型',253:'2.0 TFSI(155kW) 尊享型',254:'1.8 TFSI 手动 舒适型',255:'1.8 TFSI 舒适型',256:'2.0 TFSI(132kW) 标准型',257:'2.0 TFSI(132kW) 舒适型',258:'2.0 TFSI(132kW) 技术型',259:'2.0 TFSI(132kW) 豪华型',260:'2.0 TFSI(155kW) 运动型',261:'2.0 TFSI(155kW) 尊享型',262:'3.2 FSI quattro 旗舰型',263:'2.0TFSI 运动型',264:'1.8TFSI 舒适型',265:'2.0TFSI 技术型',266:'2.0TFSI 舒适型',267:'2.0TFSI 标准型',268:'2.0TFSI 豪华型',269:'3.2FSI quattro 旗舰型',270:'3.2 FSI quattro 旗舰型',271:'2.0 TFSI 标准型',272:'2.0 TFSI 舒适型',273:'2.0 TFSI 豪华型',274:'2.0 TFSI 技术型'},
	'0,1,275':{276:'50 TFSI quattro 豪华型',277:'30 FSI 豪华型',278:'35 FSI quattro 豪华型',
	279:'35 FSI 豪华型',280:'35 FSI 舒适型',281:'30 FSI 舒适型',282:'30 FSI 技术型',283:'TFSI 舒适型',284:'TFSI 标准型',285:'TFSI 基本型 手动',286:'2.0 TFSI 标准型(自动)',287:'3.0T FSI quattro 豪华型',288:'2.0 TFSI 基本型',289:'2.0 TFSI 标准型(手动)',290:'2.0 TFSI 舒适型(自动)',291:'2.4 技术型',292:'2.4 舒适型',293:'2.4 豪华型',294:'2.8 FSI 舒适型',295:'2.8 FSI 豪华型',296:'2.8FSI quattro 豪华型',297:'2.7 TDI',298:'2.0TFSI 基本型',299:'2.0TFSI 标准型(手动)',300:'2.0TFSI 标准型(自动)',301:'2.4技术型',302:'2.4舒适型',303:'2.4豪华型',304:'2.8FSI 舒适型',305:'2.8FSI 豪华型',306:'2.8FSI quattro 豪华型',307:'3.0FSI quattro 豪华型',308:'2.7 TDI',209:'2.0 TFSI 基本型',310:'2.0 TFSI 标准型(手动)',311:'2.0 TFSI 标准型(自动)',312:'2.4 技术型',313:'2.4 舒适型',314:'2.4 豪华型',315:'2.8 FSI 豪华型',316:'2.8 FSI 舒适娱乐型',317:'2.8 FSI quattro 豪华型',318:'3.0 TFSI quattro 豪华型',319:'2.4 技术型',320:'2.4舒适型',321:'2.8 FSI 舒适娱乐型',322:'2.8 FSI 尊享型',323:'3.2FSI quattro领先尊享型',324:'3.2 FSI 舒适型',325:'3.2 FSI 尊享型',326:'3.2 FSI quattro 舒适娱乐型',327:'3.2 FSI quattro 豪华型',328:'4.2FSI quattro至尊旗舰型',329:'3.0自动尊贵型',330:'2.4 CVT 豪华型',331:'2.4技术型',332:'2.4L自动技术领先型',333:'3.0L舒适娱乐型',334:'3.0L技术领先型',335:'3.0L quattro领先尊享型（4驱）',336:'1.8T手动公务版',337:'1.8T手自一体基本型',338:'2.0T FSI手动基本型',339:'2.0T FSI手动标准型',340:'2.0T FSI自动标准型',341:'2.4标准型',342:'2.4L自动技术领先型＋',343:'2.4技术领先型＋＋',344:'2.4尊贵型',345:'3.0自动舒适型',346:'3.0 quattro 自动旗舰型',347:'2.4豪华型',348:'1.8L基本型',349:'1.8T 自动动豪华舒适型',350:'1.8T 手动基本型',351:'1.8T 自动基本型',352:'2.4豪华行政版',353:'2.4L 技术领先型',354:'2.8L豪华行政版',355:'2.8L技术领先型',356:'2.8L 手动豪华舒适版',357:'2.4L 豪华舒适型',358:'2.4L手动基本型',359:'2.4L自动基本型',360:'2.5TDI',361:'1.8T简装版',362:'1.8T手动基本型',362:'1.8i基本型',364:'奥迪A6 1.8T 舒适型 MT',365:'奥迪A6 1.8T 简装版',366:'奥迪A6 2.4L 豪华行政版',367:'奥迪A6 2.4L MT 基本型',368:'奥迪A6 2.4L 基本型 手自一体',369:'奥迪A6 2.4L 技术领先型',370:'奥迪A6 2.4L舒适型',371:'奥迪A6 2.5TDI',372:'奥迪A6 2.8CVT 技术领先+',373:'奥迪A6 2.8CVT技术领先型',374:'2.8L A/MT',375:'奥迪A6 2.8豪华行政版',376:'2.4豪华行政版',377:'奥迪A6 1.8T 手动舒适型',378:'奥迪A6 1.8T 自动基本型',379:'奥迪A6 1.8T 自动豪华型',380:'2.4豪华行政版',381:'奥迪A6 2.8L',382:'奥迪A6 1.8 MT 基本型',383:'奥迪A6 1.8T 自动基本型',384:'奥迪A6 1.8T 手动基本型'},
	'0,1,385':{386:'2.0 TFSI 进取型',387:'2.0 TFSI 技术型',388:'2.0 TFSI 舒适型',389:'2.0 TFSI 动感型',390:'2.0 TFSI 豪华型'},
	'0,391':{392:'原动力',396:'朗杰',399:'瑞途'},
	'0,391,392':{393:'精英级',394:'舒适级',395:'尊享型'},
	'0,391,396':{397:'豪华型',398:'普通型'},
	'0,391,399':{400:'4门 超豪华型',401:'4门 豪华型'},
	'0,402':{403:'阿尔法156(进口)',405:'阿尔法166(进口)',407:'阿尔法罗米欧Gtv(进口)'},
	'0,402,403':{404:'156 2.0'},
	'0,402,405':{406:'166 3.0'},
	'0,402,407':{408:'Gtv',409:'GT 2.0 JTS S/S'},
	'0,410':{411:'DB7',413:'ONE-77(进口)',415:'Rapide(进口)',417:'V12 Vantage(进口)'},
	'0,410,411':{412:'Vantage'},
	'0,410,413':{414:'one-77'},
	'0,410,415':{416:'基本型'},
	'0,410,417':{418:'Coupe Manual版',419:'S 4.7L Roadster',420:'4.7L Sportshift Coupe',421:'4.7L Sportshift Roadster',422:'Sportshift Coupe',423:'Manual Coupe',424:'Manual Roadster',425:'Sportshift Coupe',426:'Sportshift Roadster'}
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

