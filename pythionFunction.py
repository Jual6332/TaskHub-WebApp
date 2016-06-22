#!/usr/bin/env python
import MySQLdb
import cgi, cgitb
import datetime
#db= MySQL.coonnect(host="localhost",user="root",passwd="test",db="lab")
#cur=db.cursor()
print "Content-Type: text/html"
print
print "<html>"
print("<title>python Code </title>")

#global variable needs to be loaded in
db=MySQLdb.connect(host="localhost",user="root",passwd="user",db="CSCI_3308_Project")

def addUser(nid,nmanager,nemployees,nname,ntitle,nusername,npassword,nkey):
	#db= MySQLdb.connect(host="localhost",user="root",passwd="user",db="CSCI_3308_Project")
	nid=str(nid)
	nkey=str(nkey)
	##insert db-mySql.connect here
	cur=db.cursor()
	nrecieved="None"
	nsent="None"
#	text="INSERT INTO `users` (`id`, `manager`, `employees`, `name`, `title`, `username`, `password`, `recieved`, `sent`, `key`) VALUES "
#	text+="("
#	text+=str(nid)+", "
#	text+="\'"+nmanager+"\'"+", "
#	text+="\'"+nemployees+"\'"+", "
#	text+="\'"+nname+"\'"+", "
#	text+="\'"+ntitle+"\'"+", "
#	text+="\'"+nusername+"\'"+", "
#	text+="\'"+npassword+"\'"+", "
#	text+="\'None\', "
#	text+="\'None\', "
#	text+=str(nkey)
#	text+=")"
#	print text
	cur.execute("INSERT INTO users (`id`, `manager`, `employees`, `name`, `title`, `username`, `password`, `recieved`, `sent`, `key`) VALUES (%s, %s, %s, %s, %s, %s,%s,%s,%s,%s)",(nid,nmanager,nemployees,nname,ntitle,nusername,npassword,nrecieved,nsent,nkey,))


def createTask(nid,nmanager,nworkers,ndescription,ndifficulty,ndue,nassigned,nprogress):
	#db=MySQLdb.connect(host="localhost",user="root",passwd="user",db="CSCI_3308_Project")
	cur=db.cursor()
	nid=str(nid)
	print ndue
	ndifficulty=str(ndifficulty)
	#ndue=str(ndue)
	#nassigned=str(nassigned)	
	cur.execute("INSERT INTO InProgress (`id`, `manager`, `workers`, `description`, `difficulty`, `due`, `assigned`, `progress`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",(nid,nmanager,nworkers,ndescription,ndifficulty,ndue,nassigned,nprogress,))



#used for testing



createTask("101","Ted Chips","Phil","Jaberwokee","10","2016-12-12","2012-12-12","8")

#Inserting test employee
addUser("2000","Ted Chips","Lynda","None","Market Research","Lynda77","guest123","8")
#Inserting test Create Task
#createTask("101","Ted Chips","Phil","Jaberwokee","10","2016,12,12","2012,12,12","8")
#db=MySQLdb.connect(host="localhost",user="root",passwd="user",db="CSCI_3308_Project")
cur=db.cursor()
cur.execute("SELECT * FROM InProgress")
for row in cur.fetchall() :
        print row[0] 
print "DONE<br>"


cur.execute("SELECT * FROM users")
for row in cur.fetchall() :
        print row[0] 
print "DONE<br>"


