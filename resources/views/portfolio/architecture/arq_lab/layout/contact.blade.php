<section class="py-24 text-white bg-black/90">
    <div class="max-w-7xl mx-auto flex justify-between">
        <div class="w-1/2">
            <h2 class="display-04  ">Send your Query</h2>
            <form class="mt-24">
                <label>
                    <span class="label-01 block">Nome</span>
                    <input class="mt-2 w-full border-b-2 border-b-white py-2 px-2 focus:ring-0 focus:outline-0 focus:border-b-primary" type="text" placeholder="Seu nome completo"/>
                </label>
                <div class="flex space-x-4 my-4">
                    <label class="w-1/2">
                        <span class="label-01 block">Email</span>
                        <input class="mt-2 w-full border-b-2 border-b-white py-2 px-2 focus:ring-0 focus:outline-0 focus:border-b-primary" type="text" placeholder="Email"/>
                    </label>
                    <label class="w-1/2">
                        <span class="label-01 block">Telefone</span>
                        <input class="mt-2 w-full border-b-2 border-b-white py-2 px-2 focus:ring-0 focus:outline-0 focus:border-b-primary" type="text" placeholder="Telefone"/>
                    </label>
                </div>
                <label>
                    <span class="label-01 block">Mensagem</span>
                    <textarea class="mt-2 w-full border-b-2 border-b-white py-2 px-2 focus:ring-0 focus:outline-0 focus:border-b-primary" row="5" placeholder="Sua Mensagem"></textarea>
                </label>
                <button type="submit" class="btn w-full">Enviar</button>
            </form>
        </div>
        <div>
            <a href="#">
                <img src="{{ asset('portfolio/arq-lab/assets/image/brand.png') }}"/>
            </a>
            <div class="flex space-x-8 my-4">
                <ul class="*:font-sans *:text-lg *:hover:text-primary *:hover:cursor-pointer space-y-4">
                    <li>About</li>
                    <li>Services</li>
                    <li>Our Process</li>
                    <li>Photo Gallery</li>
                    <li>Contact</li>
                </ul>
                <ul class="*:font-sans *:text-lg *:hover:text-primary *:hover:cursor-pointer space-y-4">
                    <li>Instagram</li>
                    <li>Linkedin</li>
                    <li>Address</li>
                </ul>
            </div>
        </div>
    </div>
</section>
