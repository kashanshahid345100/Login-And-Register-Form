<?php
session_start();

$username = $_SESSION['username'];
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Dashboard</title>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body{
        min-height: 100vh;
        background: linear-gradient(135deg, #667eea, #764ba2);
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .dashboard{
        width: 100%;
        max-width: 900px;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0,0,0,0.25);
    }

    .header{
        background: #667eea;
        color: white;
        padding: 25px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header h2{
        font-size: 24px;
    }

    .logout-btn{
        text-decoration: none;
    }

    .logout-btn button{
        border: none;
        background: white;
        color: #667eea;
        padding: 10px 18px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .logout-btn button:hover{
        background: #f1f1f1;
        transform: translateY(-2px);
    }

    .content{
        padding: 50px 40px;
    }

    .welcome-box{
        background: #f5f6ff;
        border-left: 5px solid #667eea;
        padding: 25px;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .welcome-box h1{
        color: #333;
        margin-bottom: 10px;
    }

    .welcome-box p{
        color: #777;
        font-size: 16px;
    }

    .cards{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .card{
        background: white;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: 0.3s;
    }

    .card:hover{
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }

    .card h3{
        color: #667eea;
        margin-bottom: 10px;
    }

    .card p{
        color: #777;
        line-height: 1.5;
    }

    @media(max-width: 700px){

        .header{
            padding: 20px;
        }

        .content{
            padding: 30px 20px;
        }

        .cards{
            grid-template-columns: 1fr;
        }

        .header h2{
            font-size: 18px;
        }

    }

</style>
```

</head>

<body>

<div class="dashboard">

```
<div class="header">

    <h2>My Dashboard</h2>

    <a href="logout.php" class="logout-btn">
        <button>Sign Out</button>
    </a>

</div>


<div class="content">

    <div class="welcome-box">

        <h1>
            Welcome, <?php echo $username; ?> 👋
        </h1>

        <p>
            You have successfully logged into your account.
        </p>

    </div>


    <div class="cards">

        <div class="card">

            <h3>Profile</h3>

            <p>
                View and manage your account information.
            </p>

        </div>


        <div class="card">

            <h3>Dashboard</h3>

            <p>
                Check your account activity and details.
            </p>

        </div>


        <div class="card">

            <h3>Settings</h3>

            <p>
                Manage your account settings here.
            </p>

        </div>

    </div>

</div>
```

</div>

</body>
</html>
