'use strict'

const gallery = document.querySelector('.gallery');

const token = 'IGQVJYQVd4bUxXajZAwbTc0bmhneVVqbjFEck1qdWl6VnlZAcVR4WVJFTmxoM2lmM2J4ZAEFwcUhHb09zUjFta21GV1o2NkdfRTlaR1I1NE1Rc19LX0RhZAmhLTE43MEJCTmdncElQYVAyelZAVRllEM3l4SAZDZD';

const url = `https://graph.instagram.com/me/media?fields=media_type,thumbnail_url,media_url,caption,permalink,timestamp&limit=6&access_token=${token}`;
    
fetch(url)
.then(res => res.json())
.then(data => createHtml(data.data) )

function createHtml(data){
    var media;
    for (const img of data) {
        if( img.media_type == 'IMAGE' ){
            media = img.media_url;
        }else if( img.media_type == 'VIDEO' ){
            media = img.thumbnail_url;
        }

        var time = new Date(img.timestamp).toLocaleDateString('es-CL');
        time = time.toLocaleString();

 
        gallery.innerHTML += `
        <a href="${img.permalink}" target="_blank">
            <div class="col">
                <div class="card instagram_card border p-3">
                    <div class="row py-2 lh-1">
                        <div class="col-10 text-black text-start"><b>festivalaguacerocomics</b><br><small class="text-secondary">${time}</small></div>
                        <div class="col-2"><img src="public/img/logos/instagram.png" class="w-100 instagram_icon"></div>
                    </div>
                    <div class="card-img-container">
                        <img src="${media}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body instagram_text text-white">
                        <p class="card-text px-3 pb-3">${img.caption.slice(0,200)}...</p>
                    </div>
                </div>
            </div>
        </a>`;
    }

}