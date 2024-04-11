<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Application Proposal</title>

    <link rel="stylesheet" href="home.css">
</head>

<body>

    <header>
        <nav>
            <img src="MK.jpg" alt="Moose Knuckles">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>

    </header>

    <div class="container">
        <h1>Welcome to Moose Knuckles</h1>
        <p>At Moose Knuckles, we specialize in premium outerwear that combines fashion with functionality. Our mission is to provide customers with high-quality, stylish jackets and parkas designed to withstand harsh weather conditions while making a statement.</p>
        <h2>Our Products</h2>
        <p>Our product line features a wide range of outerwear for men, women, and kids. From classic parkas to lightweight jackets, each Moose Knuckles garment is crafted with precision and attention to detail. Our materials are sourced responsibly, ensuring
            both durability and sustainability.</p>
        <h2>Why Choose Moose Knuckles?</h2>
        <p>When you choose Moose Knuckles, you're investing in more than just a jacket. You're choosing:</p>
        <ul>
            <li>Quality Craftsmanship: Our jackets are crafted by skilled artisans using the finest materials, resulting in products that are built to last.</li>
            <li>Style and Versatility: Whether you're hitting the slopes or navigating city streets, Moose Knuckles outerwear effortlessly combines style and functionality.</li>
            <li>Commitment to Sustainability: We are committed to reducing our environmental impact by using eco-friendly materials and manufacturing processes.</li>
            <li>Customer Satisfaction: Your satisfaction is our priority. We offer exceptional customer service and stand behind our products with a satisfaction guarantee.</li>
        </ul>
        <p>Experience the Moose Knuckles difference today!</p>
    </div>
    <div class="container">
        <ul>
            <a href="back-end/create.php">Add New Product</a>
        </ul>
    </div>
    <?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query = "SELECT * FROM products";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0) :
?>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <a href="back-end/read.php?id=<?php echo $row['id']; ?>" title="View Record">View</a>
                        <a href="back-end/update.php?id=<?php echo $row['id']; ?>" title="Update Record">Update</a>
                        <a href="back-end/delete.php?id=<?php echo $row['id']; ?>" title="Delete Record">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No products found.</p>
<?php endif; ?>

        <footer>
            <p>&copy; 2024 Moose Knuckles. All rights reserved.</p>
        </footer>