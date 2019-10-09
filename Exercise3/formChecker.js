

function verify()
{
    var username = document.getElementById("username");
    var password = document.getElementById("password").value.length;
    var RedBox = document.getElementById("RedBox");
    var BlueBox = document.getElementById("BlueBox");
    var GreenBox = document.getElementById("GreenBox");

    if(username.value.length == 0)
    {
        alert("Please enter an username");
        return false;

    if(password == 0)
    {
        alert("Please enter a valid password");
        return false;
    }

    if(RedBox.value.length == 0)
    {
        alert("Please enter a Red Box quantity");
        return false;
    }
    if(BlueBox.value.length == 0)
    {
        alert("Please enter a Blue Box quantity");
        return false;
    }
    if(GreenBox.value.length == 0)
    {
        alert("Please enter a Green Box quantity");
        return false;
    }

    if(isNaN(RedBox.value))
    {
        RedBox.value = "";
        alert("Please enter a valid Red Box quantity");
        return false;
    }
    if(isNaN(BlueBox.value))
    {
        BlueBox.value = "";
        alert("Please enter a valid Blue Box quantity");
        return false;
    }
    if(isNaN(GreenBox.value))
    {
        GreenBox.value = "";
        alert("Please enter a valid Green Box quantity");
        return false;
    }

    if(RedBox.value < 0)
    {
        RedBox.value = "";
        alert("Please enter a valid Red Box quantity");
        return false;
    }
    if(BlueBox.value < 0)
    {
        BlueBox.value = "";
        alert("Please enter a valid Blue Box quantity");
        return false;
    }
    if(GreenBox.value < 0)
    {
        GreenBox.value = "";
        alert("Please enter a valid Green Box quantity");
        return false;
    }
}



