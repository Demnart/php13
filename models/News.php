    <?php
    require_once __DIR__ . '/../classes/DB.php';

/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 07.06.17
 * Time: 8:54
 */
class News
{
    public $id;
    public $title;
    public $text;
    public $author;

public static function getAll()
{
    $db = new DB();
    return $db->querry("SELECT * FROM news",'News');
}

}