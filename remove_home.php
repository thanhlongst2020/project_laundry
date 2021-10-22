<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laundry Administrator</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <?php 
        require('require_file.php');
     ?>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="#">LAUNDRY</a>
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div id="sub-container">
            <div class="sidebar-menu">
                <div class="list-group">
                    <a href="#" class="list-group-item active" >MAIN NAVIGATION</a>
                    <a href="#" class="list-group-item">Home</a>
                    <a href="#" class="list-group-item">Laundry Type</a>
                    <a href="#" class="list-group-item">Laundry Type</a>
                    <a href="#" class="list-group-item active">SETTINGS</a>
                    <a href="#" class="list-group-item">Change Password</a>
                    <a href="#" class="list-group-item">Logout</a>
                </div>
            </div>
            <div class="content">
                <div class="content-header">Welcome Administrator!</div>
                <div class="sub-content">
                    <div class="box-header">Home</div>
                    <div class="box-body">
                        <div class="btn">
                            <button type="button" class="btn btn-success">New Laundry</button>
                            <button type="button" class="btn btn-primary">Claim</button>
                            <button type="button" class="btn btn-large btn-danger">Delete</button>
                        </div>
                        <div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Null</th>
                                        <th>Null</th>
                                        <th>Null</th>
                                        <th>Null</th>
                                        <th>Null</th>
                                        <th>Null</th>
                                        <th>Null</th>
                                        <th>Null</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <ul class="pagination">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="box-footer">
                    <pre><p>Copyright © 2016-2017 Laundry Shop. All rights reserved.     Version 2.3.0</p></pre>               
                </div>
            </div>
        </div>
    </div>
</body>
</html>