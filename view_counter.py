f = open("view_count.txt","r")
contents = f.read()
view_count = int(contents)
view_count+= 1

f = open("view_count.txt","w")
f.write(str(view_count))
