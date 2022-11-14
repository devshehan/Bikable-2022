<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addAdmin.css">
    <script src="../../controller/addAdmin.js"></script>
    <title>addAdmin</title>
</head>
<body>
    <section class="dashboard--header">
        <div class="dashboard__header--title"><strong> Add Administrator</strong></div>
        
        <div class="dashboard__header--search">
            <input type="text" class="dashboard__header--searchbox" name="dashboard--searchbox" placeholder="Search">
            <div class="dashboard__header--searchicon">
                <img src="../images/dashboardIcons/search.png" alt="search icon" class="dashboard__icon searchicon">
            </div>
        </div>

        <div class="dashboard__header--helpsetting">
            <div class="helpsetting__help">
                <img src="../images/dashboardIcons/question.png" alt="help" class="dashboard__icon">
            </div>
            <div class="helpsetting__setting">
                <img src="../images/dashboardIcons/setting.png" alt="setting" class="dashboard__icon">
            </div>
        </div>

        <div class="dashboard__user__detail">
            <div class="user__address">Hello, Shehaan</div>
            <img src="../images/avatar.png" alt="dashboard profile picture" class="imgProperty">
        </div>      
    </section>

    <section class="adminView">
        <div class="adminData__view">
            <!-- admin data -->
            <div class="adminData__View--title">Add Administrator</div>
            <div class="adminData__View--subtitle">add administrator to the system</div>

            <form action="#" method="post" class="addAdminInterface" id="addAdminInterface">
                <div class="adminData__View__Detail">

                    <div class="adminData__View__Detail--data">
                        <input type="text" class="signupDetailbox" name="first_name" placeholder="First name" id="fName">
                    </div>

                    <div class="adminData__View__Detail--data">
                        <input type="text" class="signupDetailbox" name="last_name" placeholder="Last name" id="lName">
                    </div>

                    <div class="adminData__View__Detail--data">
                        <input type="email" class="signupDetailbox" name="email" placeholder="Email" id="adminEmail">
                    </div>

                    <div class="adminData__View__Detail--data">
                        <input type="int" class="signupDetailbox" name="phone_number" placeholder="Phone number" id="pNumber">
                    </div>

                    <div class="adminData__View__Detail--data">
                        <input type="password" class="signupDetailbox" name="password" placeholder="Password" id="adminPasswd">
                    </div>

                    <div class="adminData__View__Detail--data">
                        <input type="text" class="signupDetailbox" name="nic_number" placeholder="NIC" id="nic_number">
                    </div>

                    <!-- assumed super admin only add administrators he/she can't add mechanic and users into the system -->
                    <!-- <div class="input-style">
                        <label for="fname">Roles</label><br>
                        <select name="roles" id="roles" class="select"> 
                          
                            <option value="saab">Mechanic</option>
                            <option value="mercedes">User</option>
                            <option value="mercedes">Admin</option>
                           
                        </select>
                
                    </div> -->
                </div>

                <!-- admin add to the data base -->
                <div class="addButton">
                    <input type="button" value="ADD" class="btn" onclick="addAdmin()" >
                </div>

            </form>

        </div>

        <div class="adminLogo__View">
            <img src="../images/logo/admingroupicon.png" alt="admin add page logo" class="imglogo">
        </div>
    </section>
    
</body>
</html>