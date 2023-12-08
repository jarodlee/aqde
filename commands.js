// commands.js
var commands = {
    'mp3': 'https://www.myfreemp3.com.cn/?page=audioPage&type=netease&name=%E4%BB%BB%E7%B4%A0%E6%B1%90',
    'xx': 'https://www.xuexi.cn/',
    'robot': 'http://www.aqsh3x.com/MediaWiki/index.php?title=%E6%9C%BA%E5%99%A8%E4%BA%BA%E7%A4%BE%E5%9B%A2',
    'wj': 'https://i.lizilu.org/MyOffice/%E5%85%AC%E5%8A%A1%E5%BE%AE%E4%BF%A1%E7%9B%AE%E5%BD%95/FileStorage/File/',
    'ad': 'http://111.39.38.46:8088/',
    'dy': 'https://www.ygdy8.com/',
    'cut': 'https://www.capcut.cn/home-page',
    'yun': 'https://rivers.chaitin.cn/landing/collie',
    'kali': 'https://lzl.app/MediaWiki/index.php?title=Kali',
    'ra2': 'https://game.chronodivide.com/',
    'xapi': 'https://x.threatbook.com/v5/myApi',
    'cf': 'https://one.dash.cloudflare.com/',
    'rj': 'https://noc.ruijie.com.cn/macc5/admin/#/monitor_overview_global_menu',
    'map': 'https://j.map.baidu.com/cd/ExDK',
    'osmap': 'https://www.openstreetmap.org/',
    'anqing': 'https://anhui.tianditu.gov.cn/anqing/',
    'car': 'https://www.autohome.com.cn/anqing/',
    'pvz': 'https://aqde.net/pvz/',
    'icloud': 'https://www.icloud.com/',
    'hk': 'https://www.hk.chinamobile.com/',
    'apple': 'https://www.apple.com.cn/',
    'tg': 'https://web.telegram.org/',
    'tb': 'https://aqde.taobao.com/',
    'nasa': 'https://plus.nasa.gov/',
    'openai': 'https://openai.com/',
    'vpn': 'https://lzl.app/MediaWiki/index.php?title=%E6%8E%A8%E8%8D%90%E5%88%97%E8%A1%A8',
    'speed': 'https://speed.cloudflare.com/',
    'hf': 'https://x.aqde.net:4433/web/index',
    'mail': 'https://mail.aqde.net',
    'cnspeed': 'https://www.speedtest.cn/',
    'bz': 'https://www.bilibili.com/bangumi/media/md28223043',
    'aqtz': 'http://www.aqtz.gov.cn/',
    'mp': 'https://mp.weixin.qq.com/',
    'wx': 'https://weixin.qq.com/',
    'mj': 'https://www.mj.org.cn/',
    'aqmj': 'http://www.aqmj.gov.cn/',
    'aqzx': 'http://www.aqzx.gov.cn/',
    'aq': 'https://www.anqing.gov.cn/',
    'aqdx': 'http://www.aqdx.org.cn/',
	'nas': 'https://nas.aqde.net:9090/',
	'88': 'http://lxj.aqde.net:88/',
	'ght': 'https://noi.aqde.net:8888/files',
	'scratch': 'http://www.aqsh3x.com/MediaWiki/index.php?title=Scratch%E5%AD%A6%E4%B9%A0%E5%A4%A7%E7%BA%B2',
	'Scratch': 'http://www.aqsh3x.com/MediaWiki/index.php?title=Scratch%E5%AD%A6%E4%B9%A0%E5%A4%A7%E7%BA%B2',
	'key': 'http://www.aqsh3x.com/MediaWiki/index.php?title=%E9%94%AE%E7%9B%98%E7%BB%83%E4%B9%A0',
	'mouse': 'http://www.aqsh3x.com/MediaWiki/index.php?title=%E9%BC%A0%E6%A0%87%E7%BB%83%E4%B9%A0',
	'sl': 'http://www.aqsh3x.com/MediaWiki/index.php?title=%E6%89%AB%E9%9B%B7',
	'mine': 'https://minesweeper.online/cn/',
    'aqsh3x': 'http://www.aqsh3x.com/MediaWiki/index.php?title=%E5%AE%89%E5%BA%86%E7%9F%B3%E5%8C%96%E4%B8%89%E5%B0%8F',
    'help': 'https://lzl.app/MediaWiki/index.php?title=%E8%81%8A%E5%A4%A9%E5%AE%A4%E5%B8%AE%E5%8A%A9%E6%96%87%E6%A1%A3',
    '3x': 'http://aqsh3x.com',
    '3': 'https://3.aqde.net/',
    '360': 'http://www.aqsh3x.com/MediaWiki/index.php?title=360',
    'game': 'https://www.msn.cn/zh-cn/play/arcade',
    'math': 'https://lzl.app/math.php',
    'yy': 'https://yiyan.baidu.com/',
    'lxj': 'https://d.aqde.net:65534/anqing/',
    'ai': 'https://lzl.app/MediaWiki/index.php?title=ai',
    'lzl': 'https://lzl.app/',
    'zuowen': 'http://s.aqde.net/zuowen/',
    'bing': 'http://bing.com',
    'gpt': 'https://chat.openai.com/',
    'z': 'https://tool.chinaz.com/',
    'i': 'https://lzl.app/MediaWiki/index.php?title=%E9%98%85%E8%AF%BB%E5%88%97%E8%A1%A8',
    'b': 'http://bing.com',
    'd': 'https://d.aqsh3x.com/panel/',
    'g': 'http://google.com',
    'c': 'https://trust.openai.com/',
    't': 'https://t.aqde.net:8/',
    'h': 'http://x.aqde.net:8123/',
    'x': 'https://i.ghtxx.cn:9090/metrics',
    'github': 'http://github.com/jarodlee/',
    'baidu': 'http://baidu.com',
    'bd': 'http://baidu.com',
    'git': 'https://lzl.app/MediaWiki/index.php?title=Git',
    'gitlab': 'http://i.aqde.net:8099/',
    'oj': 'http://oj.aqde.net/',
    'ip': 'http://www.ip111.cn/',
    'screen': 'http://s.aqde.net/',
    '2345': 'https://kids.2345.com/',
    '/360': 'https://young.hao.360.com/',
    '/vcf': 'https://x.lizilu.org/78758fdd-a11a-451e-90df-895612701fd9',
    '/1': 'https://yiyan.baidu.com/',
    '/192': 'http://192.168.1.1/',
    'sc': 'http://s.aqde.net/'
    // 可以添加更多命令和网址
};
