<?php
   //include('loginsession.php');
?>
<html>
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
		<h1>Welcome <?php echo $login_session; ?></h1>
			<html ng-app="TodoListApp">
  <head>

    <link href="css/index.css" type="text/css" rel="Stylesheet" />
    <title>Todo List</title>
  </head>
  <body  ng-controller="ListController">

    <div id = "page_wrapper"> 
      <div id = "title_wrapper">
        Todo List
      </div>

      <div id = "content_wrapper">

        <div id = "tools_block">
          <table>
            <tr>
              <td>
                <div id = "add_item_block">
                  TODO: <br/>
                  <input type="text" ng-model="newItem.detail" maxlength="42" />
                  <button ng-click="addItem()">Add Item</button>
                </div>
              </td>
              <td>
                <div id = "search_item_block">
                  Item Search: <br/>
                  <input type="text" ng-model="detail" />
                </div>
              </td>
            </tr>
          </table>
        </div>

        <div id = "tabs_wrapper">
          <table id = "tabs_block" >
            <tr>
              <th><div id = "all_item_tab" class = "tab" onclick = "changeTab(1)"> All things </div></th>
              <th><div id = "active_item_tab" class = "tab" onclick = "changeTab(2)"> ToDo </div></th>
              <th><div id = "complete_item_tab" class = "tab" onclick = "changeTab(3)"> Completed </div></th>
            </tr>
          </table>        
        </div>

        <div id = "all_list_wrapper" class = "list_wrapper">
          <div id = "all_list_block" class = "list_block">
              <div class = "list_item">
                <div class = "item_col detail_title"> Details </div>
                <div class = "item_col stat_title"> Status </div>
              </div>
              <hr>
              <div class = "list_item" ng-repeat="item in items | filter:detail ">
                <div class = "item_col delete_col" ng-click="deleteItem(item)"></div>
                <div class = "item_col detail_col"> {{ item.detail }} </div>
                <div class = "item_col stat_col"> {{ item.stat }} </div>
              </div>
          </div>
        </div>

        <div id = "active_list_wrapper" class = "list_wrapper">
          <div id = "active_list_block" class = "list_block">
              <div class = "list_item">
                <div class = "item_col detail_col"> Details </div>
                <div class = "item_col stat_col"> Status </div>
              </div>
              <hr>
              <div class = "list_item" ng-repeat="item in items | filter:{stat:'Active'} | filter:detail">
                <div class = "item_col delete_col" ng-click="deleteItem(item)"></div>
                <div class = "item_col detail_col"> {{ item.detail }} </div> 
                <div class = "item_col stat_col"> {{ item.stat }} </div>
                <div class = "item_col"> <button ng-click="completeItem(item)">Done!</button> </div>
              </div>
          </div>
        </div>

        <div id = "complete_list_wrapper" class = "list_wrapper">
          <div id = "complete_list_block" class = "list_block">
              <div class = "list_item">
                <div class = "item_col detail_col"> Details </div>
                <div class = "item_col stat_col"> Status </div>
              </div>
              <hr>
              <div class = "list_item" ng-repeat="item in items | filter:{stat:'Complete'} | filter:detail">
                <div class = "item_col delete_col" ng-click="deleteItem(item)"></div>
                <div class = "item_col detail_col"> {{ item.detail }} </div> 
                <div class = "item_col stat_col"> {{ item.stat }} </div>
              </div>
          </div>
        </div>


      </div>
    </div>

    <script type="text/javascript" src="js/angular.min.js"></script>

    <script src="js/ListController.js"></script>

  </body>
</html>
		<h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>