import sys
import config

argv = sys.argv[:]

f = open ( "posts.csv", "br" )
fd= f.read().decode(config.enc.default)
f.close()

fd = fd.split("\n")
html = "<div id='posts'>"

for x in fd:
    data = x.split("!,")
    if data[2] == "1":
        html += "<div class='content'>" + data[0] + "</div>"
        
html += "</div>"

print ( html )
