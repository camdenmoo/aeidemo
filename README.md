
## AEI Demo

This is well outside the remit of your project outline, but after reading through the brief I chose to build the kind of tool I would like to see applied to the the situation described for 'Paradise Music'.

The functionality to search available releases by text entry (iTunes 1st Jun 2021) is included at [https://aeidemo.frankjones.co/command-line](https://aeidemo.frankjones.co/command-line).

It works with any given date format (01-06-2021, 01/06/2021, June 06, 2021) etc.

The distribution partner is not case-sensitive. So it is quite robust. I will be adding further safeguards later today.

## Extra Stuff

There is also a form style method of searching for the same release information at [https://aeidemo.frankjones.co](https://aeidemo.frankjones.co).

As you will see, the sidebar menu offers a range of views to visualise the information from the CSV. Forming the Begining of a CRUD application to be applied to the business example of 'Paradise Music'.

Under 'Partners' there is the ability to add a new ditribution partner. If you add 'Spotify' as a new distribution partner, checking 'All of the above' for the 'Ditribution types' field, this updates the relevant fields under the 'Artists' and 'Releases' views for example.

Also, the 'Partners' and 'Distribution Types' views give us a useful count to so how many songs have been released by a certain partner or using a certain distribution type.

## More to Come

I'll will be adding more CRUD functionality to other elements of the application. I will also be adding the ability to import/export CSV files.

## Set Up & Installation

It's a straight Laravel 9 application and all the necessary database migrations and seeders are in place. So it should be faily self-explanatory should you wish to install it. Though I'm not sure why you would need to.

## In Conclusion 

I've put this together rather hastily and it obviously not something that I would consider ready for release. It's more of an expression of the kind of tools I like to build for the 'Paradise Music' scenario. 

I completely understand if this kind of work is not what you're looking for and I'd take no offence if you choose not discuss the job opening any further with me.

Nevertheless, I will continue working on the project and adding features before a final clean-up overhaul to the point where it would be ready for release. 

Everything will continue to be posted to this public repository on GitHub so if you wanted to check in at a later stage, that's fine with me.


- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
