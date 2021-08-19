    <?php
    
    $pull = "CREATE TABLE comments 
(
    id serial PRIMARY KEY ,
    name varchar(20),
    content text,
    date timestamp DEFAULT now()
)";
    
    $rollback = "DROP TABLE comments";
    
    return [
        'pull' => $pull,
        'rollback' => $rollback
        ];