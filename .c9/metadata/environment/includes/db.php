{"filter":false,"title":"db.php","tooltip":"/includes/db.php","undoManager":{"mark":16,"position":16,"stack":[[{"start":{"row":34,"column":0},"end":{"row":46,"column":15},"action":"remove","lines":["    //     $sql = \"INSERT INTO users (username, password, balance)","    //     VALUES ('John', 'Doe', '343')\";","        ","    //     if ($conn->query($sql) === TRUE) {","    //       echo \"New record created successfully\";","    //     } else {","    //       echo \"Error: \" . $sql . \"<br>\" . $conn->error;","    //     }","        ","    //     $conn->close();","    // }","","// connectDB();"],"id":2}],[{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"remove","lines":[" "],"id":3},{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"remove","lines":[" "]},{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"remove","lines":[" "]},{"start":{"row":31,"column":7},"end":{"row":31,"column":8},"action":"remove","lines":[" "]},{"start":{"row":31,"column":6},"end":{"row":31,"column":7},"action":"remove","lines":[" "]},{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"remove","lines":["/"]},{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":1,"column":0},"end":{"row":24,"column":2},"action":"remove","lines":["    // if ($_SERVER['HTTP_HOST'] == 'localhost') {","    //     define('HOST', 'localhost');","    //     define('USER', 'root');","    //     define('PASS', '8615');","    //     define('DB', 'ecom');","    // } else {","    //     define('HOST', 'mysqlcluster21');","    //     define('USER', 'ecomadmin');","    //     define('PASS', 'Pikachu23343!');","    //     define('DB', 'ecom');","    //}","//     define('HOST', 'mysqlcluster21.registeredsite.com ');","//     define('USER', 'ecomadmin');","//     define('PASS', 'Pikachu23343!');","//     define('DB', 'ecom');","//     function connectDB() {","//         $conn = new mysqli(HOST, USER, PASS, DB);","//         var_dump($conn);","//         return $conn;","//     }","","//     connectDB();","","//"],"id":4}],[{"start":{"row":12,"column":1},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":13,"column":0},"end":{"row":23,"column":1},"action":"insert","lines":["function connectDB() {","        $servername = \"mysqlcluster21.registeredsite.com\";","        $username = \"ecomadmin\";","        $password = \"Pikachu23343!\";","        $database = \"ecom\";","        ","    // Create connection","        $conn = new mysqli($servername, $username, $password, $database);","        return $conn;","","}"],"id":6}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":3},"action":"insert","lines":["// "],"id":7},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"insert","lines":["// "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":3},"action":"insert","lines":["// "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"insert","lines":["// "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":3},"action":"insert","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"insert","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"insert","lines":["// "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":3},"action":"insert","lines":["// "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":14,"column":23},"end":{"row":14,"column":56},"action":"remove","lines":["mysqlcluster21.registeredsite.com"],"id":8},{"start":{"row":14,"column":23},"end":{"row":14,"column":73},"action":"insert","lines":["catalogdb.cvrkscuruxt3.us-west-1.rds.amazonaws.com"]}],[{"start":{"row":15,"column":21},"end":{"row":15,"column":30},"action":"remove","lines":["ecomadmin"],"id":9},{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"insert","lines":["a"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["d"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"insert","lines":["m"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"insert","lines":["i"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"insert","lines":["n"]}],[{"start":{"row":15,"column":26},"end":{"row":15,"column":28},"action":"insert","lines":["  "],"id":10}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":[" "],"id":11},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":33},"action":"remove","lines":["Pikachu23343"],"id":12}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"remove","lines":["!"],"id":13}],[{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":["A"],"id":14},{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["d"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"insert","lines":["m"]},{"start":{"row":16,"column":24},"end":{"row":16,"column":25},"action":"insert","lines":["i"]},{"start":{"row":16,"column":25},"end":{"row":16,"column":26},"action":"insert","lines":["n"]},{"start":{"row":16,"column":26},"end":{"row":16,"column":27},"action":"insert","lines":["P"]},{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":["a"]},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":["s"]},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["1"],"id":15}],[{"start":{"row":2,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["// function connectDB() {","//         $servername = \"mysqlcluster21.registeredsite.com\";","//         $username = \"ecomadmin\";","//         $password = \"Pikachu23343!\";","//         $database = \"ecom\";","        ","//     // Create connection","//         $conn = new mysqli($servername, $username, $password, $database);","//         return $conn;","","// }"],"id":16}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":31},"action":"remove","lines":["AdminPass1"],"id":18},{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["y"]},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["o"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["u"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["a"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["i"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["n"]},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["t"]},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["g"]},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["e"]},{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"insert","lines":["t"]}],[{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":["t"],"id":19},{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"insert","lines":["h"]},{"start":{"row":6,"column":33},"end":{"row":6,"column":34},"action":"insert","lines":["i"]},{"start":{"row":6,"column":34},"end":{"row":6,"column":35},"action":"insert","lines":["s"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":0},"end":{"row":15,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1701447620902,"hash":"62e8257322974ab3280f56b13f3564d23c781d7d"}