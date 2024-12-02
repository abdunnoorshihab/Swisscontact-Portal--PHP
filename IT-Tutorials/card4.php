<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blogging Website Layout</title>
</head>
<?php require_once('../header.php') ?>

<body class="font-sans">
    <header class="bg-white text-black text-center py-4">
        <h1 class="text-2xl font-bold">How to Use the New VPN</h1>
    </header>

    <nav class="bg-gray-900 text-white py-2"></nav>

    <div class="container mx-auto flex flex-col md:flex-row justify-between max-w-5xl p-5 space-y-5 md:space-y-0">
        <main class="flex-2 space-y-5">
            <?php
            $articles = [
                [
                    "title" => "HTML",
                    "date" => "December 11, 2023",
                    "author" => "Swisscontact",
                    "content" => "HTML stands for HyperText Markup Language. It is used to design the web pages. 
                                  With the help of HTML, you can create a complete website structure. HTML is the combination 
                                  of Hypertext and Markup language. Hypertext defines the link between the web pages and markup 
                                  language defines the text document within the tag that defines the structure of web pages."
                ],
                [
                    "title" => "CSS",
                    "date" => "December 10, 2023",
                    "author" => "GeeksforGeeks", 
                    "content" => "CSS (Cascading Style Sheets) is used to style web pages. Cascading Style Sheets are fondly 
                                  referred to as CSS. The reason for using this is to simplify the process of making web pages 
                                  presentable. It allows you to apply styles on web pages. More importantly, it enables you to do 
                                  this independently of the HTML that makes up each web page."
                ],
                [
                    "title" => "JavaScript",
                    "date" => "December 09, 2023",
                    "author" => "GeeksforGeeks",
                    "content" => "JavaScript (JS) is the most popular lightweight, interpreted compiled programming language. 
                                  It can be used for both Client-side as well as Server-side developments. JavaScript is also known 
                                  as a scripting language for web pages. This JavaScript Tutorial is designed to help both beginners 
                                  and experienced professionals master the fundamentals of JavaScript."
                ],
                [
                    "title" => "ReactJS",
                    "date" => "December 08, 2023",
                    "author" => "GeeksforGeeks",
                    "content" => "ReactJS is a declarative, efficient, and flexible JavaScript library for building user 
                                  interfaces. It is an open-source, component-based front-end library that is responsible only for 
                                  the view layer of the application. ReactJS is not a framework, it is just a library developed by 
                                  Facebook to solve some problems that we were facing earlier."
                ]
            ];

            foreach ($articles as $article) {
                echo "
                <article class='border border-gray-400 p-5 rounded-md'>
                    <h2 class='text-xl font-semibold'>{$article['title']}</h2>
                    <p class='text-gray-500 text-sm mb-2'>
                        Published on {$article['date']} by {$article['author']}
                    </p>
                    <p class='text-justify'>{$article['content']}</p>
                </article>";
            }
            ?>
        </main>

        <aside class="flex-1 bg-gray-200 p-5 rounded-md">
            <h2 class="text-lg font-semibold">Recent Posts</h2>
            <ul class="mt-3 space-y-2">
                <?php
                $recentPosts = ["HTML", "CSS", "JavaScript", "ReactJS"];
                foreach ($recentPosts as $post) {
                    echo "<li><a href='#' class='text-blue-500 hover:underline'>{$post}</a></li>";
                }
                ?>
            </ul>
        </aside>
    </div>
</body>
<special-footer></special-footer>
<script src="../headerFooterManager.js"></script>

</html>

<?php require_once('../footer.php') ?>