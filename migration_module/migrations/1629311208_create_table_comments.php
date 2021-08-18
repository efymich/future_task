    <?php
    
    $pull = "CREATE TABLE comments 
(
    id serial PRIMARY KEY ,
    name varchar(20),
    date timestamp DEFAULT now(),
    content text 
)";
    
    $rollback = "DROP TABLE comments";
    
    return [
        'pull' => $pull,
        'rollback' => $rollback
        ];