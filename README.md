# updateDataDetectInternet
Update data to database when detect internet online

# How to use
Database name: backfile_db

Initial JS will get Data for save on variable is data (name of variable) and type JSON
and detect internet offline/online every 2 second. You can change interval of detect in $(document).ready() in JavaScript

# How to test
Open index.html and you will see 2 button is changeData and updateData
-> changeData button is update data on variable name is data
Get Data. 
data = {
  id: 1,
  name: "coke",
  productQty: 1,
  updated_at: "2021-11-05"
}
After changeData
data = {
  id: 1,
  name: "coke",
  productQty: 15,
  updated_at: "2025-01-25"
}

-> updateData button is shortcut if you won't to wait internet to offline. You can click this button.
