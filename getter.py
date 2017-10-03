import config

f = open ( "posts.csv", "rb" )
fd= f.read().decode(config.enc.default)
f.close()
    
fd.replace("&lt;", "<").replace("&gt;", ">")
fd = fd.split("?.")
fd.reverse()
html = "<div id='posts'>"

for x in fd:
    data = x.split("!,")
        
    if data[3] == "1":
        html += "<div class='content'>"
        html += "<div class='header'><p>" + data[0]
        html += "</p></div><div class='main'><p>" + data[1]
        html += "</p></div><div class='date'><p>" + data[2] + "</p></div></div>"
        
html += "</div>"

f = open ( "inner.html", "wb" )
f.write(html.encode(config.enc.default))
f.close()
del f
