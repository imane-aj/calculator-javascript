<!DOCTYPE html>
    <html>
        <head>
            <title>Calculator</title>
            <style>
                *{
                  margin:0;
                  padding: 0;
                  box-sizing: border-box;
                }
                body{
                    background: url(calculator.jpg) no-repeat center;
                    background-size: cover;
                    overflow: hidden;
                }
                .main{
                    margin: 150px auto;
                    text-align: center;
                    width:400px;
                    padding: 30px;
                    background: #ddd;
                    box-shadow: 2px 2px 2px 2px #444;
                }
                .form{
                    margin-bottom: 15px;
                   
                }
                .screen{
                    width: 100%;
                    pointer-events:none;
                    height:40px;
                    box-shadow: 0px 1.2px 1.5px inset #444;
                }
                .calculator::before , .calculator::after {
                    content: '';
                    display: table;
                    clear: both;
                    width: 100%;
                }
               .button{
                 height: 40px;
                 width: 100%;
                 outline: none;
                 box-shadow: 1px 2px 3px #444;
                  
               }
                .button:hover{
                    background:darkblue;
                }
                .col-4{
                    float: left;
                    width:25%;
                    padding: 5px;
                      
                }
                .col-6{
                    float: left;
                    width:50%;
                    padding: 5px;
                }
                .button.equal{
                    background: brown;
                    font-size: 22px;
                    color:#fff;
                }
                .button.oper{
                    background: #20b2aa;
                    border-color: #d6d6d6d6;
                    color:#fff;
                }
                .button.oper1{
                    background:#6d4b7e;
                    border-color: #d6d6d6d6;
                    color:#fff;
                }
            </style>
        </head>
        <body>
            <div class="main">
                <form name="myform">
                    <input type="text" name="screen" class="screen" id="screen">
                </form>
                <br>
                <div class="calculator">
                    <div class="col-4"><input type="button" value="C" class="button oper1" id="c"></div>
                    <div class="col-4"><input type="button" value="%" class="button oper1"></div>
                    <div class="col-4"><input type="button" value="Del" class="button oper1" id="clear"></div>
                    <div class="col-4"><input type="button" value="/" class="button oper"></div>
                </div>
                <div class="calculator">
                    <div class="col-4"><input type="button" value="9" class="button"></div>
                    <div class="col-4"><input type="button" value="8" class="button"></div>
                    <div class="col-4"><input type="button" value="7" class="button"></div>
                    <div class="col-4"><input type="button" value="*" class="button oper"></div>
                </div>
                <div class="calculator">
                    <div class="col-4"><input type="button" value="6" class="button" onclick="getNumbers(6)"></div>
                    <div class="col-4"><input type="button" value="5" class="button"></div>
                    <div class="col-4"><input type="button" value="4" class="button"></div>
                    <div class="col-4"><input type="button" value="-" class="button oper"></div>
                </div>
                <div class="calculator">
                    <div class="col-4"><input type="button" value="3" class="button"></div>
                    <div class="col-4"><input type="button" value="2" class="button"></div>
                    <div class="col-4"><input type="button" value="1" class="button"></div>
                    <div class="col-4"><input type="button" value="+" class="button oper"></div>
                </div>
                <div class="calculator">
                    <div class="col-4"><input type="button" value="0" class="button"></div>
                    <div class="col-4"><input type="button" value="." class="button"></div>
                    <div class="col-6"><input type="button" value="=" class="button equal" id="equal" ></div>
                    
                </div>
            </div>
       <script src="calculator.js"></script>
        </body>
    </html>