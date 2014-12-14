Share = {
    vkontakte: function(purl, ptitle, pimg, text) {
        url  = 'http://vkontakte.ru/share.php?';
        if (purl) url += 'url='          + encodeURIComponent(purl);
        if (ptitle) url += '&title='       + encodeURIComponent(ptitle);
        if (text) url += '&description=' + encodeURIComponent(text);
        if (pimg) url += '&image='       + encodeURIComponent(pimg);
        url += '&noparse=true';
        Share.popup(url);
    },
    odnoklassniki: function(purl, text) {
        url  = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
        if (text) url += '&st.comments=' + encodeURIComponent(text);
        if (purl) url += '&st._surl='    + encodeURIComponent(purl);
        Share.popup(url);
    },
    facebook: function(purl, ptitle, pimg, text) {
        url  = 'http://www.facebook.com/sharer.php?s=100';
        if (ptitle) url += '&p[title]='     + encodeURIComponent(ptitle);
        if (text) url += '&p[summary]='   + encodeURIComponent(text);
        if (purl) url += '&p[url]='       + encodeURIComponent(purl);
        if (pimg) url += '&p[images][0]=' + encodeURIComponent(pimg);
        Share.popup(url);
    },
    twitter: function(purl, ptitle) {
        url  = 'http://twitter.com/share?';
        if (ptitle) url += 'text='      + encodeURIComponent(ptitle);
        if (purl) url += '&url='      + encodeURIComponent(purl);
        if (purl) url += '&counturl=' + encodeURIComponent(purl);
        Share.popup(url);
    },
    mailru: function(purl, ptitle, pimg, text) {
        url  = 'http://connect.mail.ru/share?';
        if (purl) url += 'url='          + encodeURIComponent(purl);
        if (ptitle) url += '&title='       + encodeURIComponent(ptitle);
        if (text) url += '&description=' + encodeURIComponent(text);
        if (pimg) url += '&imageurl='    + encodeURIComponent(pimg);
        Share.popup(url)
    },
    linkedin: function(purl, ptitle, psource, text) {
    	url = 'http://www.linkedin.com/shareArticle?';
    	url += 'mini=' + 'true';
    	if (purl) url += '&url=' + encodeURIComponent(purl);
    	if (ptitle) url += '&title=' + encodeURIComponent(ptitle);
    	if (ptext) url += '&summary=' + encodeURIComponent(ptext);
    	if (psource) url += '&source=' + encodeURIComponent(psource);
    	Share.popup(url);
    },

    popup: function(url) {
        window.open(url,'','toolbar=0,status=0,width=626,height=436');
    }
};
