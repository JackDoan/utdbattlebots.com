#!/usr/bin/env python


#https://docs.google.com/spreadsheets/d/1NspDq0uWV69Omiltd3wGdhbzB2WmXFObvJ0mnnKSpy0/edit?usp=sharing
#<iframe src="https://docs.google.com/spreadsheets/d/1NspDq0uWV69Omiltd3wGdhbzB2WmXFObvJ0mnnKSpy0/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
#ihttps://spreadsheets.google.com/feeds/list/1NspDq0uWV69Omiltd3wGdhbzB2WmXFObvJ0mnnKSpy0/Sheet1/public/basic

#good json url=https://docs.google.com/spreadsheets/d/1NspDq0uWV69Omiltd3wGdhbzB2WmXFObvJ0mnnKSpy0/gviz/tq?gid=0&amp;pub=1
#use it

api_url = "https://docs.google.com/spreadsheets/d/1NspDq0uWV69Omiltd3wGdhbzB2WmXFObvJ0mnnKSpy0/gviz/tq?gid=0&amp;pub=1"

import urllib2

data = urllib2.urlopen(api_url).read()
#we need to strip google.visualization.Query.setResponse( from data, as well as 2 char's on the end
data_json = data[39:-2]

import json

#print json.dumps(data_json, sort_keys=True)

sheet = json.loads(data_json)
actual_data = sheet['table']['rows']
q = actual_data

#[{u'c': [{u'v': u'Title'}, {u'v': u'Date'}, {u'v': u'Body'}, {u'v': u'Visible'}]}, {u'c': [{u'v': u'TEXT GOES HERE MAN'}, None, None, {u'v': None}]}]
#q[1]['c'][0]['v']
#u'TEXT GOES HERE MAN'

#new, good list: myList[id]{'title','date','body','visible'}

i = 1
articles = []
while (i <= (len(actual_data)-1)):
	if (actual_data[i]['c'][3]['v'] == '1'):
		print "<div class=\"row\"><div class=\"col-md-12\">"
       		print "<div class=\"panel panel-warning\"><div class=\"panel-heading\"><h3 class=\"panel-title\">"
		print actual_data[i]['c'][0]['v']
		print "</h3></div><div class=\"panel-body\"><p>"
		print actual_data[i]['c'][1]['v'] #date
		print actual_data[i]['c'][2]['v'] #body
		print "</p></div></div></div></div>"
		#articles.append({'title':actual_data[i]['c'][0]['v'],'date':actual_data[i]['c'][1]['v'],'body':actual_data[i]['c'][2]['v']})
#	else:
		#print 'skip'
	i = i+1

#print articles
