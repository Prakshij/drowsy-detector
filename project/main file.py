
from flask import Flask

app=Flask(__name__)

@app.route('/',methods=['GET'])
def hello_world():
    return "hello world"

if __name__=='_main_':
    app.run(port=3000,debug=True)







