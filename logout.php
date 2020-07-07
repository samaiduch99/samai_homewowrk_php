<?php 
    session_start();/*  It destroys the session information. */
    $_SESSION = [];// Reset the session array:
    session_destroy();// Destroy the session data on the server:
    define('TITLE', 'Logout');// Define a page title and include the header:
    include('templates/header.html');
?>
    
    <h2>Logout Page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem soluta velit suscipit fugit libero qui illo quo. Excepturi impedit amet dolore quaerat ducimus sapiente a exercitationem facilis saepe quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur deleniti fuga aut cupiditate, molestiae nulla rem excepturi odit nesciunt veniam maxime nihil quae vel, libero minus repudiandae fugit a corporis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ab veniam enim deserunt id exercitationem? Error similique, nemo cumque ullam dolorum vero fugiat facere pariatur aut explicabo atque, assumenda natus!Lorem</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem soluta velit suscipit fugit libero qui illo quo. Excepturi impedit amet dolore quaerat ducimus sapiente a exercitationem facilis saepe quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur deleniti fuga aut cupiditate, molestiae nulla rem excepturi odit nesciunt veniam maxime nihil quae vel, libero minus repudiandae fugit a corporis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ab veniam enim deserunt id exercitationem? Error similique, nemo cumque ullam dolorum vero fugiat facere pariatur aut explicabo atque, assumenda natus!Lorem</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem soluta velit suscipit fugit libero qui illo quo. Excepturi impedit amet dolore quaerat ducimus sapiente a exercitationem facilis saepe quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur deleniti fuga aut cupiditate, molestiae nulla rem excepturi odit nesciunt veniam maxime nihil quae vel, libero minus repudiandae fugit a corporis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ab veniam enim deserunt id exercitationem? Error similique, nemo cumque ullam dolorum vero fugiat facere pariatur aut explicabo atque, assumenda natus!Lorem</p>
   

    
<?php include('templates/footer.html'); ?>