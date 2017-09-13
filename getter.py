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
    if data[3] == "1":
        html += "<div class='content'>"
        html += "<div class='header'><p>" + data[0]
        html += "</p></div><div class='main'><p>" + data[1]
        html += "</p></div><div class='date'><p>" + data[2] + "</p></div></div>"
        
html += "</div>"

print ( html )
