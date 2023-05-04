<style>
    :root {
    --font-primary: "Nunito Sans",sans-serif
}

.modal::-webkit-scrollbar {
    width: .5rem
}

:root {
    --bg-color: #fafafa;
    --elements-color: #fff;
    --text-color: #111517;
    --input-color: #858585;
    --shadow-primary: 0 1px 4px hsla(0,0%,52%,.3);
    --shadow-secondary: 0 2px 10px hsla(0,0%,52%,.2);
    --shadow-btn: 0 2px 7px hsla(0,0%,52%,.5);
    --hover-effect-color: #999;
    --btn-hover: #e6e6e6;
    --btn-scroll-top: #c9c9c9
}

body.dark-theme {
    --bg-color: #202c37;
    --elements-color: #2b3945;
    --text-color: #fff;
    --input-color: #fff;
    --shadow-primary: 0px 1px 8px 0px rgba(0,0,0,.1);
    --shadow-secondary: 0px 1px 15px 0px rgba(0,0,0,.1);
    --shadow-btn: 0px 1px 15px 0px rgba(0,0,0,.3);
    --btn-hover: #212c35;
    --btn-scroll-top: #263340
}

html {
    font-size: 100%;
    scroll-behavior: smooth
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0
}

body {
    background-color: var(--bg-color);
    font-family: var(--font-primary);
    min-height: 100vh;
    transition: background .3s linear,color .3s linear
}



img {
    display: block
}

.btn {
    background-color: var(--elements-color);
    border-radius: .25rem;
    box-shadow: var(--shadow-btn);
    color: var(--text-color);
    cursor: pointer;
    font-weight: 600;
    transition: all .5s ease
}

.btn:hover {
    color: var(--hover-effect-color)
}

a {
    text-decoration: none
}

ul {
    list-style: none
}

.container {
    margin: 0 auto;
    max-width: 75rem;
    width: 90vw
}

.countries {
    display: grid;
    gap: 2rem;
    grid-template-columns: repeat(auto-fit,minmax(270px,1fr));
    justify-items: center
}

.header {
    background-color: var(--elements-color);
    box-shadow: var(--shadow-primary)
}

.nav-menu {
    display: flex;
    justify-content: space-between;
    padding: 1.25rem 0
}

.nav-menu__link {
    color: var(--text-color);
    font-size: 1rem
}

@media (min-width: 48em) {
    .nav-menu__link {
        font-size:1.5rem
    }
}

.nav-menu__theme {
    align-items: center;
    background: transparent;
    border: none;
    color: var(--text-color);
    cursor: pointer;
    display: flex;
    font-family: inherit;
    font-size: 1rem;
    font-weight: 600;
    gap: .3125rem;
    justify-content: normal
}

.nav-menu__theme span {
    font-size: .875rem
}

@media (min-width: 48em) {
    .nav-menu__theme span {
        font-size:1rem
    }

    .nav-menu__theme {
        font-size: 1.25rem
    }
}

.search {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    justify-content: space-between;
    margin-bottom: 2rem
}

@media (min-width: 48em) {
    .search {
        flex-direction:row
    }
}

.form {
    align-items: center;
    color: var(--input-color);
    display: flex;
    flex: 1;
    justify-content: normal;
    max-width: 31.25rem;
    position: relative
}

.form__input {
    background-color: var(--elements-color);
    border: none;
    border-radius: .5rem;
    box-shadow: var(--shadow-primary);
    color: var(--text-color);
    flex: 1;
    outline: var(--elements-color);
    padding: 1rem 1rem 1rem 3.75rem
}

.form__input::-webkit-input-placeholder {
    color: var(--input-color);
    opacity: .8
}

.form__input::-moz-placeholder {
    color: var(--input-color);
    opacity: .8
}

.form__input:-ms-input-placeholder {
    color: var(--input-color);
    opacity: .8
}

.form__input::-ms-input-placeholder {
    color: var(--input-color);
    opacity: .8
}

.form__input::placeholder {
    color: var(--input-color);
    opacity: .8
}

.form__icon {
    font-size: 1.25rem;
    left: 1.25rem;
    position: absolute
}

.dropdown {
    align-items: center;
    border: none;
    border-radius: .5rem;
    cursor: pointer;
    display: flex;
    flex: 1;
    font-family: inherit;
    font-weight: 600;
    justify-content: space-between;
    max-width: 11.875rem;
    padding: 1rem 1.5rem;
    position: relative
}

.dropdown,.dropdown__list {
    background-color: var(--elements-color);
    box-shadow: var(--shadow-secondary);
    color: var(--text-color)
}

.dropdown__icon {
    font-size: 1.25rem;
    transition: all .5s ease
}

.dropdown__icon--active {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg)
}

.dropdown__list {
    border-radius: .5rem;
    opacity: 0;
    padding: 1rem 2rem;
    position: absolute;
    right: 0;
    top: 110%;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: top;
    transform-origin: top;
    transition: all .5s ease;
    width: 100%;
    z-index: 1
}

.dropdown__list--active {
    opacity: 1;
    -webkit-transform: scaleY(1);
    transform: scaleY(1)
}

.dropdown__item {
    padding: .5rem;
    text-align: start;
    transition: all .5s ease
}

.dropdown__item--active,.dropdown__item:hover {
    color: var(--hover-effect-color);
    margin-left: .3125rem
}

.card {
    background-color: var(--elements-color);
    border-radius: .5rem;
    box-shadow: var(--shadow-primary);
    cursor: pointer;
    overflow: hidden;
    width: 16.875rem
}

.card__img {
    height: 12.5rem;
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%
}

.card__content {
    color: var(--text-color);
    padding: 2rem 2rem 3rem
}

.card__name {
    margin-bottom: 1rem;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 100%
}

.card__list {
    display: flex;
    flex-direction: column;
    gap: .5rem;
    justify-content: normal
}

.card__item span {
    font-weight: 600
}

.modal {
    background-color: var(--bg-color);
    bottom: 0;
    color: var(--text-color);
    overflow-y: scroll;
    position: fixed;
    top: 0;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    transition: all .5s ease;
    visibility: hidden;
    width: 100%;
    z-index: 10
}

@media (min-width: 48em) {
    .modal {
        opacity:0;
        -webkit-transform: none;
        transform: none
    }
}

.modal--active {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    visibility: visible
}

@media (min-width: 48em) {
    .modal--active {
        opacity:1;
        -webkit-transform: none;
        transform: none
    }
}

.modal--btn {
    background-color: var(--elements-color);
    border: none;
    border-radius: .25rem;
    box-shadow: var(--shadow-btn);
    color: var(--text-color);
    cursor: pointer;
    font-family: inherit;
    font-weight: 600;
    padding: .5rem 1.5rem;
    transition: all .3s ease
}

.modal--btn:hover {
    background-color: var(--btn-hover)
}

.modal__overlay {
    padding: 2rem 0
}

.modal__back {
    align-items: center;
    display: flex;
    gap: .5rem;
    justify-content: normal;
    margin-bottom: 3rem
}

.modal__back-icon {
    font-size: 1.125rem
}

.modal__container {
    display: grid;
    gap: 2rem
}

@media (min-width: 64em) {
    .modal__container {
        grid-template-columns:repeat(2,minmax(28.125rem,34.375rem));
        justify-content: space-between
    }
}

.modal__flag {
    max-height: 20.625rem;
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%
}

.modal__name {
    margin-bottom: 1rem
}

.modal__info {
    display: grid;
    gap: 2.5rem;
    grid-template-columns: repeat(auto-fit,minmax(14.375rem,1fr))
}

@media (min-width: 64em) {
    .modal__info {
        grid-template-columns:repeat(2,1fr)
    }
}

.modal__list {
    display: flex;
    flex-direction: column;
    gap: .5rem;
    justify-content: normal
}

.modal__item span {
    font-weight: 600
}

.modal__border {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    justify-content: normal;
    margin-top: 3rem
}

.modal__border-name {
    font-size: 1.25rem
}

.modal__border-list {
    display: flex;
    flex-wrap: wrap;
    gap: .5rem;
    justify-content: normal
}

.modal__border-btn {
    padding: .5rem 2rem
}

.modal__iframe {
    height: 17.5rem;
    width: 100%
}

.btn-scroll {
    background-color: var(--btn-scroll-top);
    border: none;
    bottom: 1.25rem;
    -webkit-clip-path: circle();
    clip-path: circle();
    cursor: pointer;
    height: 2.1875rem;
    opacity: 0;
    position: fixed;
    right: 1rem;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    transition: all .5s ease;
    visibility: hidden;
    width: 2.1875rem
}

.btn-scroll:hover {
    background-color: var(--hover-effect-color)
}

.btn-scroll--active {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    visibility: visible
}

.btn-scroll__link {
    display: inline-block
}

.btn-scroll__link i {
    color: #f5f5f5;
    font-size: 1.5rem
}

.not-found {
    background: url(../assets/country-not-found.svg) no-repeat;
    background-position: 50%;
    background-size: contain;
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
    transition: all 1s ease
}

.not-found--active {
    height: 15.625rem;
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1)
}

@media (min-width: 48em) {
    .not-found--active {
        height:18.75rem
    }
}

/*# sourceMappingURL=style.css.map */

</style>
