<div class="bottom-footer">
    <div class="wrapper">
        <button>SING-UP NOW!</button>
        <div class="socials">
            <span>FOLLOW US</span>
            <ul>
                <li v-for="item in items">
                    <a :href="item.url">
                        <img :src="item.img" :alt="item.text">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
