

if ( navigator.serviceWorker ) {
    navigator.serviceWorker.register('/sw.js');
}

// if(window.caches){
//     //caches.open('Prueba2');
//     //    caches.has('Prueba2').then(console.log)
//     //caches.delete('Prueba1').then(console.log);
//     caches.open('cache-v1.1').then(cache=>{
//         //cache.add('index.html');
//         cache.addAll([
//             '/index.html',
//             '/css/style.css',
//             '/img/main.jpg'
//         ]).then(()=>{
// //            cache.delete('/css/style.css');
//             cache.put('index.html', new Response('Hola mundo'));
//         });

//         /*cache.match('index.html')
//         .then(res=>{
//             res.text().then(console.log);
//         });
//         */
//     });
//     caches.keys().then(keys=>{
//         console.log(keys);
//     });
// }
