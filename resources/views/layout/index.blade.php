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



        ReactDOM.render(element, root);




        // function tick() {
        //     const element = (
        //         <div>
        //             <h1>Jam Sekarang</h1>
        //             <h2>{new Date().toLocaleTimeString()}</h2>
        //         </div>
        //     )
        // ReactDOM.render(element, root);
        // }
        // tick();
        // setInterval(function() {
        //     tick();
        // }, 1000);

        // function Halo(props) {
        //     return <p>Halo <b>{props.name}</b></p>
        // }

        // const element = (
        //     <>
        //         <Halo name="Haha" />
        //         <Halo name="Hihi" />
        //         <Halo name="Hoho" />
        //     </>
        // );

        // function halo(name) {
        //     return <p>Halo <b>{name}</b></p>
        // }

        // const element = (
        //     <>
        //         {halo('Haha')}
        //         {halo('Hihi')}
        //         {halo('Hoho')}
        //     </>
        // );

        // const element = <img src="https://images.pexels.com/photos/753626/pexels-photo-753626.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />

        // const element = <h1 className = "heading-1">Hello Lyzer</h1>

        // function ngegas(text) {
        //     return text.toUpperCase();
        // }

        // const name = 'Lyzer';
        // const element =<h1>Hello {ngegas(name)}</h1>

        // (
        //     <ul>
        //         <li>Apple</li>
        //         <li>Banana</li>
        //         <li>Orange</li>
        //     </ul>
        // );

        // document.createElement('h1');
        // element.textContent = 'Hello guys';
        // element.className = 'heading-1';

        // root.appendChild(element);

        // ReactDOM.render(element, root);
    </script>

</body>
</html>
