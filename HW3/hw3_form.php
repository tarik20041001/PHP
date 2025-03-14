<!DOCTYPE html>

<html>
    <head>
        <title>迎新活動行程與報名表</title>
        <meta charset="UTF-8">

        <style>
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 1;
            font-family: Arial, sans-serif;
            background-color:rgb(156, 163, 148);
        }

        form {
            width: 280px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-right: 50px;
        }

        table {
            margin: 0 auto;
            border:3px solid black;
            border-collapse:collapse;
            text-align:center;
            width: 60%;
            height: 50%;
        }

        tr td{
            border:3px solid black;
        }
     
        </style>

    </head>

    <body>

        <table>
            <tr>
                <td colspan="4" >迎新活動行程</td>
            </tr>
            <tr>
                <td>時間(DAY1)</td>
                <td>行程內容</td>
                <td>時間(DAY2)</td>
                <td>行程內容</td>
            </tr>
            <tr >
                <td>AM 7:00</td>
                <td>集合</td>
                <td>AM 9:00</td>
                <td>起床</td>
            </tr>
            <tr >
                <td>AM 7:30</td>
                <td>出發</td>
                <td>AM 9:30</td>
                <td>吃早餐</td>
            </tr>
            <tr >
                <td>AM 10:30</td>
                <td>抵達玉山登山口</td>
                <td>AM 10:00</td>
                <td>開始下山</td>
            </tr>
            <tr >
                <td>AM 11:00</td>
                <td>開始爬山</td>
                <td>PM 03:00</td>
                <td>抵達山腳</td>
            </tr>
            <tr >
                <td>PM 01:00</td>
                <td>吃午餐</td>
                <td>PM 03:30</td>
                <td>喝下午茶</td>
            </tr>
            <tr >
                <td>PM 02:00</td>
                <td>繼續爬山</td>
                <td>PM 04:00</td>
                <td>回家</td>
            </tr>
            <tr >
                <td>PM 04:00</td>
                <td>抵達山頂</td>
                <td>PM 07:00</td>
                <td>抵達高雄大學</tr>
            </tr>
            <tr >
                <td>PM 04:30</td>
                <td>吃晚餐</td>
                <td>PM 07:30</td>
                <td>吃晚餐</td>
            </tr>
            <tr >
                <td>PM 05:00</td>
                <td>洗洗睡</td>
                <td>PM 08:00</td>
                <td>解散</td>
            </tr>

        </table>

        <br>
    
        <form action = "hw3_info.php" method = "POST" >
            
            你的姓名:<input type ="text" name = "name" size ="10" maxlength = "10" required><br>
            你的學號:<input type ="text" name ="id" size="10" maxlength = "10"><br>
            你的性別:<input type = "radio" name = "gender" value = "男">男
                    <input type = "radio" name = "gender" value = "女">女<br>
            你的生日:<input type ="date" name = "birthday"><br>
            你的年齡:<input type ="number" name = "age" min = "10" max = "30"><br>
            你的電話:<input type ="tel" name ="phone" pattern = "[0-9]{10}"><br>
            

            你的興趣:
            爬山 <input type = "checkbox" name = "interest[]" value = "爬山">
            玩遊戲 <input type = "checkbox" name = "interest[]" value = "玩遊戲">
            聊天 <input type = "checkbox" name = "interest[]" value = "聊天">
            <br>

            你是哪裡人:
            <select name="city">
                <option value="台北">台北</option>
                <option value="台中">台中</option>
                <option value="高雄">高雄</option>
            </select>
            <br>

            你的意見:<br>
            <textarea cols="30" rows="10" name="comment"></textarea><br>

            <input type = "submit" value="送出"><br>
            <input type = "reset" value="清除"><br>
            
        </form>

    </body>
</html>