cities = new Object();
cities['奥迪']=new Array('奥迪A1(进口)', '奥迪A3(进口)', '奥迪A4(进口)', '奥迪A5(进口)', '奥迪A6(进口)', '奥迪A7(进口)', '奥迪A8L(进口)', 'Allroad quattro(进口)', '奥迪Q5(进口)', '奥迪Q7(进口)', '奥迪R8(进口)', '奥迪S4', '奥迪S5(进口)', '奥迪S8(进口)', '奥迪TT(进口)', '奥迪100', '奥迪200', '奥迪A4', '奥迪A4L', '奥迪A6L');
cities['奥克斯']=new Array('原动力','朗杰','瑞途');
cities['阿尔法·罗米欧']=new Array('阿尔法156(进口)','阿尔法166(进口)','阿尔法罗米欧Gtv(进口)');
cities['阿斯顿·马丁']=new Array('DB7','ONE-77(进口)','Rapide(进口)','V12 Vantage(进口)','V8 Vantage(进口)','Virage','DB9(进口)','DBS(进口)');
cities['奔驰']=new Array('CLS级(进口)','E级双门轿跑车(进口)','SLK级(进口)','SLR','凌特(进口)','唯雅诺(进口)','奔驰AMG车系(进口)','奔驰A级(进口)','奔驰B级(进口)','奔驰CLK(进口)','奔驰CL系列(进口)','奔驰C级(进口)','奔驰E级(进口)','奔驰GLK级(进口)','奔驰GL级(进口)','奔驰G级(进口)','奔驰M级(进口)','凌特','唯雅诺');
cities['宝马']=new Array('宝马1系(进口)','宝马3系(进口)','宝马5系(进口)','宝马5系GT(进口)','宝马6系(进口)','宝马7系(进口)','宝马M系(进口)','宝马X1(进口)','宝马X3(进口)','宝马X5(进口)','宝马X6(进口)','宝马Z4(进口)','华晨宝马X1','宝马3系','宝马5系');
cities['标致']=new Array('标致206','标致206 CC(进口)','标致206 SW','标致207 CC(进口)','标致3008(进口)','标致307','标致307 CC(进口)','标致307 SW(进口)','标致308 CC(进口)','标致308 SW(进口)','标致4008','标致406 Coupe','标致406(进口)','标致407 Coupe(进口)','标致407 SW(进口)');
cities['北汽制造']=new Array('勇士','北汽212系列','北汽骑士','域胜007','战旗2023','战旗2024','新城市猎人','旋风','角斗士','陆铃','陆霸','雷驰');
cities['比亚迪']=new Array('比亚迪E6','比亚迪F0','比亚迪F3','比亚迪F3DM','比亚迪F3R','比亚迪F6','比亚迪G3','比亚迪G3R','比亚迪G6','比亚迪L3','比亚迪M6','比亚迪S6','比亚迪S8','福莱尔');
cities['本田']=new Array('艾力绅','东风本田CR-V','思铂睿','思铭','思域','奥德赛','飞度','锋范','歌诗图','思迪','雅阁','本田CR-V(进口)','本田阿柯德(进口)','本田奥德赛(进口)','本田思域(进口)','本田雅阁(进口)');
cities['奔腾']=new Array('奔腾B50','奔腾B70');
cities['宝龙']=new Array('天马座','菱惠');
cities['保时捷']=new Array('panamera(进口)','911(进口)','918','Boxster(进口)','Cayenne(进口)','Cayman(进口)');
cities['宾利']=new Array('宾利Arnage(进口)','慕尚(海外)','欧陆(进口)','雅骏(进口)');
cities['别克']=new Array('世纪','昂科雷(进口)','林荫大道','凯越','凯越HRV','凯越旅行车','别克','别克GL8','君威','君越','英朗XT','荣御');
cities['布嘉迪']=new Array('威航(进口)');
cities['宝骏']=new Array('乐驰','宝骏630');
cities['北汽威旺']=new Array('北汽威旺306');
cities['巴博斯']=new Array('BRABUS巴博斯 CLS级','BRABUS巴博斯 C级','BRABUS巴博斯 G级','BRABUS巴博斯 ML级','BRABUS巴博斯 S级');
cities['长城']=new Array('长城C20R','长城C30','长城C50','长城V80','长城精灵','大脚兽','迪尔','风骏3','长城H3','哈弗H5','金迪尔','酷熊');
cities['昌河']=new Array('昌河微型货车','昌河新单双排','昌河骏马','昌铃王','海象','爱迪尔','爱迪尔Ⅱ','福瑞达','福运');
cities['长丰']=new Array('奇兵','猎豹CFA2030','猎豹CFA6473系列','猎豹CJY6470','猎豹CS6','长丰猎豹CS7','飞腾','骐菱','黑金刚','猎豹CT5');
cities['大众']=new Array('PASSAT(进口)','Tiguan(进口)','夏朗(进口)','大众 R36(进口)','CC(进口)','大众Eos(进口)','大众Multivan(进口)','尚酷(进口)','甲壳虫(进口)','辉腾(进口)');
cities['东风']=new Array('东风小王子','桑蒂雅','东风小康C37','东风小康K01','东风小康K02');
cities['东南']=new Array('V3菱悦','富利卡','希旺','得利卡','菱利','菱帅');
cities['']=new Array();



function set_cityy(provincee, cityy)
{
    var pvv, cvv;
    var i, ii;

    pvv=provincee.value;
    cvv=cityy.value;

    cityy.length=1;

    if(pvv=='0') return;
    if(typeof(cities[pvv])=='undefined') return;

    for(i=0; i<cities[pvv].length; i++)
    {
       ii = i+1;
       cityy.options[ii] = new Option();
       cityy.options[ii].text = cities[pvv][i];
       cityy.options[ii].value = cities[pvv][i];
    }

}