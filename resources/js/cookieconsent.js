
import 'vanilla-cookieconsent/dist/cookieconsent.css'
import 'vanilla-cookieconsent/src/cookieconsent.js'

var cookieConsent = window.initCookieConsent();
cookieConsent.run({
    autorun: true,
    current_lang: 'cs',
    languages: {
        cs: {
            consent_modal: {
                title: 'Používáme cookies',
                description: 'Dobrý den, tyto webové stránky používají základní soubory cookie k zajištění svého správného fungování a sledovací soubory cookie k pochopení toho, jak s nimi pracujete. Ty se nastavují pouze po schválení.',
                primary_btn: {
                    text: 'Přijmout vše',
                    role: 'accept_all'              // 'accept_selected' or 'accept_all'
                },
                secondary_btn: {
                    text: 'Nastavení',
                    role: 'settings'                // 'settings' or 'accept_necessary'
                }
            },
            settings_modal: {
                title: 'Předvolby souborů cookie',
                save_settings_btn: 'Uložit nastavení',
                accept_all_btn: 'Přijmout vše',
                reject_all_btn: 'Zamítnout vše',       // optional, [v.2.5.0 +]
                cookie_table_headers: [
                    { col1: 'Název' },
                    { col2: 'Doména' },
                    { col3: 'Expirace' },
                    { col4: 'Popis' },
                    { col5: 'Typ' }
                ],
                blocks: [
                    {
                        title: 'Používání cookie',
                        description: 'Při návštěvě jakékoli webové stránky je pravděpodobné, že stránka získá nebo uloží informace na vašem prohlížeči, a to většinou ve formě souborů cookies. Můžou to být informace týkající se vás, vašich preferencí a zařízení, které používáte. Většinou to slouží k vylepšování stránky, aby fungovala podle vašich očekávání. Informace vás zpravidla neidentifikují jako jednotlivce, ale celkově mohou pomoci přizpůsobovat prostředí vašim potřebám. Respektujeme vaše právo na soukromí, a proto se můžete rozhodnout, že některé soubory cookies nebudete akceptovat. Když kliknete na různé tituly, dozvíte se více a budete moci nastavení změnit. Nezapomínejte ale na to, že zablokováním některých souborů cookies můžete ovlivnit, jak stránka funguje a jaké služby jsou vám nabízeny.'
                    }, {
                        title: 'Naprosto nezbytné cookie',
                        description: 'Jsou nezbytné k tomu, aby web fungoval, takže není možné je vypnout. Většinou jsou nastavené jako odezva na akce, které jste provedli, jako je požadavek služeb týkajících se bezpečnostních nastavení, přihlašování, vyplňování formulářů atp. Prohlížeč můžete nastavit tak, aby blokoval soubory cookies nebo o nich posílal upozornění. Mějte na paměti, že některé stránky bez těchto souborů nebudou fungovat. Tyto soubory cookies neukládají žádné osobní identifikovatelné informace.',
                        toggle: {
                            value: 'necessary',
                            enabled: true,
                            readonly: true
                        },
                    }, {
                        title: 'Analytické cookies',
                        description: 'Pomáhají sledovat počet návštěvníků a také z jakého zdroje provoz pochází, což nám umožňuje zlepšovat výkonnost našich webových stránek. Můžeme s nimi určovat, které stránky jsou nejoblíbenější a které nejsou oblíbené, a také sledovat, jakým způsobem se návštěvníci na webu pohybují. Všechny informace, které soubory cookies shromažďují, jsou souhrnné a anonymní. Pokud soubory cookies nepovolíte, nebudeme vědět, kdy jste navštívili naši stránku.',
                        toggle: {
                            value: 'analytics',
                            enabled: false,
                            readonly: false
                        },
                        cookie_table: [
                            {
                                col1: '^_ga',
                                col2: 'google.com',
                                col3: '2 roky',
                                col4: '',
                                col5: '',
                                is_regex: true
                            },
                            {
                                col1: '_gid',
                                col2: 'google.com',
                                col3: '1 rok',
                                col4: '',
                                col5: ''
                            },
                            {
                                col1: 'sid',
                                col2: 'seznam.cz',
                                col3: '540 dnů',
                                col4: '',
                                col5: ''
                            },

                        ]
                    }, {
                        title: 'Více informací',
                        description: 'V případě jakýchkoli dotazů týkajících se mých zásad ohledně souborů cookie a vašich voleb nás prosím kontaktujte: <a class="cc-link" href="mailto:info@optikaberyl.cz">kontaktujte</a>.',
                    }
                ]
            }
        }
    }
});



