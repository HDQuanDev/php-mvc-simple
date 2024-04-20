<!DOCTYPE html>
<html>

<head>
    <title><?php if (isset($title)) echo $title;
            else echo 'Trang chủ'; ?></title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            color: #f1f1f1;
            line-height: 1.6;
            background-color: #333;
            border: 4px solid #98FB98;
            border-radius: 10px;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.5);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            color: #f1f1f1;
            background-color: #444;
        }

        th {
            background-color: #555;
            color: #f1f1f1;
        }

        tr:nth-child(even) {
            background-color: #555;
        }

        hr {
            margin-top: 20px;
            border: none;
            border-top: 2px solid #98FB98;
            /* Brighter, wider border */
            opacity: 0.5;
            /* Add some transparency */
        }

        a {
            color: #98FB98;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #66CDAA;
            text-decoration: underline;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        label {
            margin-top: 20px;
            font-weight: 600;
            color: #f1f1f1;
        }

        input,
        select {
            margin-top: 5px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #555;
            color: #f1f1f1;
        }

        input[type="submit"] {
            margin-top: 30px;
            background-color: #98FB98;
            color: black;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
            /* Add transition */
        }

        input[type="submit"]:hover {
            background-color: #66CDAA;
            color: black;
        }

        .error-container {
            text-align: center;
            padding: 20px;
            background-color: #444;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .error-container h1 {
            color: #f1f1f1;
        }

        .error-container p {
            color: #ff6347;
        }

        .error-container a {
            color: #98FB98;
            text-decoration: none;
        }

        .error-container a:hover {
            color: #66CDAA;
        }
    </style>
</head>