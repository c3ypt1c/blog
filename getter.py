import sys
import config

argv = sys.argv[:]

f = open ( "posts.csv", "rb" )
fd= f.read().decode(config.enc.default)
f.close()

fd = fd.split("\n")
html = "<div id='posts'>"

for x in fd:
    data = x.split("!,")
    if data[2] == "1":
        html += "<div class='content'><div class='main'><p>" + data[0]
        html += "</p></div><div class='date'><p>" + data[1]+ "</p></div></div>"
        
html += "</div>"

print ( html )
