<fieldset style="width:50%;margin:auto;">
    <legend>會員登入</legend>
    <table>
        <tr>
            <td>帳號管理</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="登入" onclick="login()">
                <input type="reset" value="清除" onclick="resetForm()">
            </td>
            <td>
                <a href="?do=forgot">忘記密碼</a>
                <a href="?do=reg">尚未註冊</a>
            </td>
        </tr>
    </table>
</fieldset>

<script>

function login(){
    let user={
        acc:$("#acc").val(),
        pw:$("#pw").val(),
    }
    
        $.get("./api/chk_acc.php",{acc:user.acc},(res)=>{
            console.log("chk acc => ",res)
            if(parseInt(res)==0){
                alert("查無帳號")
                resetForm()
            }else{
                $.post("./api/chk_pw.php",user,(res)=>{
                    console.log("login => ",res)
                    if(parseInt(res)==1){
                        if(user.acc=='admin'){
                            location.href='admin.php';
                        }else{
                            location.href='index.php';
                        }
                    }else{
                        alert("密碼錯誤")
                        resetForm()
                    }
                })
            }
        })
    
}

function resetForm(){
    $("#acc").val("")
    $("#pw").val("")
}    
</script>