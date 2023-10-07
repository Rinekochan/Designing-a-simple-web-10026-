<!--
    Name/ID: Viet Hoang Pham 104506968
    Assignment 1
-->
<!DOCTYPE html>

<html lang = "en">
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is dashboard page for manager of HPM" >
    <meta name="keywords" content="Dashboard page" >
    <!-- Developer of this page is Viet Hoang Pham -->
    <meta name="author" content="Viet Hoang Pham" >
    <title>HPM: Manager Dashboard</title>
    <!-- This css file styles manager website -->
    <link rel = "stylesheet" href = "styles/ManagerStyle.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "shortcut icon" href="images/favicon.png">
</head>
<body id = "MainBackground">
    <header>
        <p>Viet Hoang Pham</p>
        <button><span class = "menuicon"><i class = "fa fa-sign-out"></i></span>Logout</button>
    </header>
    <!--Developer: Viet Hoang Pham. This is Manager Navigation Menu code. You should add this at the start of <body> element-->
    <?php include_once 'managermenu.inc';?>
    <!--End of Navigation Menu Code.-->
    <main>
        <div id = "Dashboard">
            <article id = "NewAppDashboard">
                <div>
                    <h2>New Application</h2>
                    <p>2</p>
                </div>
                <span class = "dashboardicon"><i class = "fa fa-tasks"></i></span>
            </article>
            <article id = "CurrentAppDashboard">
                <div>
                    <h2>Current Application</h2>
                    <p>2</p>
                </div>
                <span class = "dashboardicon"><i class = "fa fa-tasks"></i></span>
            </article>
            <article id = "FinalAppDashboard">
            <div>
                    <h2>Final Application</h2>
                    <p>2</p>
                </div>
                <span class = "dashboardicon"><i class = "fa fa-tasks"></i></span>
            </article>
        </div>
    </main>
</body>