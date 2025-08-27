<?php
interface Exportable {
    public function exportToJson();
    public function exportToCsv();
}
class BlogPost implements Exportable {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }
    public function exportToJson() {
        return json_encode([
            "title" => $this->title,
            "content" => $this->content
        ]);
    }
    public function exportToCsv() {
        return $this->title . "," . $this->content;
    }
}
class Report implements Exportable {
    private $title;
    private $data;

    public function __construct($title, $data) {
        $this->title = $title;
        $this->data = $data;
    }
    public function exportToJson() {
        return json_encode([
            "title" => $this->title,
            "data" => $this->data
        ]);
    }
    public function exportToCsv() {
        return $this->title . "," . implode(",", $this->data);
    }
}
$post = new BlogPost("My First Post", "This is the content.");
$report = new Report("Monthly Sales", ["sales" => 5000, "expenses" => 2000]);
echo "Blog Post as JSON: " . $post->exportToJson() . "<br>";
echo "Report as CSV: " . $report->exportToCsv() . "<br>";
?>
