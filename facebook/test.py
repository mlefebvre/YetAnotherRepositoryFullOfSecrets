import requests

a = requests.get("https://graph.facebook.com/v2.8/1513562778655613/comments?format=json&access_token=EAAAACZAVC6ygBAAvRshdD1iGP7VZAR4JMQxRhnViVIjzoIV3nCnZBejzSsCwCgRs5aZAAbBNI837xWZBnAMCRIdZADqjjpOtZAGBDgZBcUz5l7n0IqK53MKKcyeCIBZBIDVSkaqth983q5avmR2gq61ZBfHGPiGAa64IYZD")
print(a.text)