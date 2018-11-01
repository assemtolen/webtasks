var FAMILY_FILE = JSON.stringify([
	{"name": "Assem Tolen", "born": 2000, "father": "Murat Abdrakhmanov", "mother": "Nurzhamal Aubakirova"},
	{"name": "Nurzhamal Aubakirova", "born": 1967, "father":"Aluarbek", "mother": "Bibigul"},
	{"name": "Murat Abdrakhmanov", "born": 1964, "father":"Tolen", "mother": "Kuttykyz"},
	{"name": "Kuttykyz", "born": 1940, "father":"Father", "mother": "Mother"},
	{"name": "Tolen", "born": 1938, "father":"Abdrakhman", "mother": "Azhe"}
	
])

var count = JSON.parse(FAMILY_FILE);
console.log("length: "+ count.length);

console.log(count[2].name + " and " + count[1].name );

console.log(count[0].born +", "+count[1].born+", "+count[2].born+ ", "+count[3].born+", "+count[4].born);

console.log("Father's Father name: " + count[4].name);

for (var i = 0; i < count.length; i++) { 
    if(count[i].born<1950 && 1950-count[i].born<26){
    	console.log("Was young in 1950: "+ count[i].name)
    }
}
var min  = count[0].born;
for (var i = 0; i < count.length; i++) { 
	if(count[i].born<min){
		min = count[i].born;
    }
}
console.log("Ancient: "+min)