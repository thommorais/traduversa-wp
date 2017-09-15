/**
 * Get all of an element's parent elements up the DOM tree
 * @param  {Node}   elem     The element
 * @param  {String} selector Selector to match against [optional]
 * @return {Array}           The parent elements
 */
const getParents = ( elem, selector ) => {

    // Element.matches() polyfill
    if (!Element.prototype.matches) {
        Element.prototype.matches =
        Element.prototype.matchesSelector ||
        Element.prototype.mozMatchesSelector ||
        Element.prototype.msMatchesSelector ||
        Element.prototype.oMatchesSelector ||
        Element.prototype.webkitMatchesSelector ||
        function(s) {
            let matches = (this.document || this.ownerDocument).querySelectorAll(s),
                i = matches.length;
            while (--i >= 0 && matches.item(i) !== this) {}
            return i > -1;
        };
    }

    // Setup parents array
    let parents = []

    // Get matching parent elements
    for ( ; elem && elem !== document; elem = elem.parentNode ) {
      
        // Add matching parents to array
        if ( selector ) {
            if ( elem.matches( selector ) )
                parents.push( elem )
        } else {
            parents.push( elem )
        }

    }

    return parents
}

(function(document, window, domIsReady, undefined) {

  domIsReady(function() {

    const doc = document,
          qs  = doc.querySelector.bind(doc),
          qa  = doc.querySelectorAll.bind(doc)

    /** Carousel of clients **/
    const clients = new Swiper('.clients-carousel', {
      paginationClickable: true,
      slidesPerView: 'auto',
      loop: true,
      spaceBetween: 60,
      autoplay: 2500,
      freeMode: true
    })

    /** Carousel of banners **/
    const banner = new Swiper('#banner-carousel', {
      slidesPerView: 1,
      autoplay: 4500
    })

    /** Smooth scroll **/
    const toTop = new SmoothScroll('.scroll', {
      speed: 500,
      easing: 'easeOutQuint'
    })

    toTop.animateScroll(0)


    /**
     * @desc Print the name of selected file on the label
     */
    const inputs = qa( '[type="file"]' )

    Array.prototype.forEach.call( inputs, ( input ) => {
      let parent = getParents(input, '.field')
    	let label	 = parent[0].querySelector('label'),
    		  labelVal = label.innerHTML

    	input.addEventListener( 'change', function( e ){
    		let fileName = ''

    		if( this.files && this.files.length > 1 )
    			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length )

    		else
    			fileName = e.target.value.split( '\\' ).pop()

    		if( fileName )
    			label.innerHTML = fileName

    		else
    			label.innerHTML = labelVal

    	})

    })

    /**
     * @desc make the labels shrink to on input focus
     */
    function labelFly(e){

        let parent = getParents(this, '.field'),
            tip = parent[0].querySelector('.wpcf7-not-valid-tip') || false

        if(tip) tip.remove()

        if(this.value != null)
          parent[0].classList.add('fly-label')

        else
          parent[0].classList.remove('fly-label')

    }

    const labels = qa( '.has-label')

    Array.prototype.forEach.call( labels, ( label ) => {
      label.addEventListener( 'change', labelFly)
      label.addEventListener( 'keydown', labelFly)
      label.addEventListener( 'focus', labelFly)
      label.addEventListener( 'focusout', labelFly)
    })

    setInterval(()=>{

      let messages = qa('.wpcf7-response-output')

      if(messages.length){

        Array.prototype.forEach.call( messages, ( message ) => {
          message.removeAttribute('style')
          message.classList.add('wpcf7-display-none')
        })

      }

    },3000)


    const hamburger = qs('.hamburger')
    hamburger.addEventListener('click', ()=>{
      qs('body').classList.toggle('menu-open')
    })


  })
})(document, window, domIsReady)
