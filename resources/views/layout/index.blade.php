<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="root"></div>

    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>

    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

    <script type="text/babel">
        const root = document.querySelector('#root');

        const element = (
            <ul>
                <li>Apple</li>
                <li>Banana</li>
                <li>Orange</li>
            </ul>
        );

        // document.createElement('h1');
        // element.textContent = 'Hello guys';
        // element.className = 'heading-1';

        // root.appendChild(element);

        ReactDOM.render(element, root);
    </script>

</body>
</html>
