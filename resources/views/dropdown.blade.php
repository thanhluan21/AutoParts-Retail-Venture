<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dropdown Item</title>
<link rel="stylesheet" href="{{ asset('css/dropdown.css') }}">
</head>
<body>
<div class="dropdown">
    <button class="dropbtn" onclick="toggleDropdown(event)">+</button>
    <div class="dropdown-content" id="dropdownContent">
        <!-- Item 1 -->
        <div class="dropdown-item">
            <button class="dropbtn" onclick="toggleSubmenu(event)">+</button>
            <a href="#">Item 1</a>
            <div class="submenu" style="display: none;">
                <a href="#">Sub-item 1.1</a>
                <a href="#">Sub-item 1.2</a>
                <a href="#">Sub-item 1.3</a>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="dropdown-item">
            <button class="dropbtn" onclick="toggleSubmenu(event)">+</button>
            <a href="#">Item 2</a>
            <div class="submenu" style="display: none;">
                <a href="#">Sub-item 2.1</a>
                <a href="#">Sub-item 2.2</a>
                <a href="#">Sub-item 2.3</a>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="dropdown-item">
            <button class="dropbtn" onclick="toggleSubmenu(event)">+</button>
            <a href="#">Item 3</a>
            <div class="submenu" style="display: none;">
                <a href="#">Sub-item 3.1</a>
                <a href="#">Sub-item 3.2</a>
                <a href="#">Sub-item 3.3</a>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleDropdown(event) {
        var dropdownContent = event.target.nextElementSibling;
        dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    }

    function toggleSubmenu(event) {
        var submenu = event.target.nextElementSibling;
        submenu.style.display = submenu.style.display === "block" ? "none" : "block";
    }
</script>
</body>
</html>
