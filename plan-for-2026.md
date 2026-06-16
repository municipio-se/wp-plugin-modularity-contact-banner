# Plan for LTS 2026

Bas: `3.1.5`. Nuvarande LTS-head: `e389b67`. Ny upstream-bas: `4.0.24`.

## Slutsats

Upstream `4.0.24` har bättre ikonfält och modernare module lifecycle, men
LTS-beslutet att ta bort `onClick`-fältet finns inte i upstream.

## Arbetsplan

- [ ] Starta från upstream `4.0.24`.
- [ ] Återskapa endast LTS-paketering.
- [ ] Behåll upstreams `icon`-fält och `App`-registrering.
- [ ] Ta ett aktivt produkt-/säkerhetsbeslut om `onClick`-fältet.
- [ ] Verifiera befintligt innehåll som kan använda `onClick`.

## Beslutstabell

| Område | Vår slutändring | Upstream-läge | Bedömning | Berörda commits |
| --- | --- | --- | --- | --- |
| Composer och paketering | Bytte till `municipio/wp-plugin-modularity-contact-banner`, GPL och installer-konfiguration. | Upstream är kvar på `helsingborg-stad/modularity-contact-banner`, MIT och nya servicekrav. | Återskapa smalare | package-/basecommits |
| Ikonfält | Bytte textfält till select och fyllde via `Municipio/Admin/Acf/PrefillIconChoice`. | Upstream använder `icon`-fält och registrerar prefill via `App`. | Ersätt | `343fe40` |
| `onClick`-fält | Tog bort fältet från ACF. | Fältet finns kvar i `4.0.24`. | Återskapa smalare om LTS fortsatt ska förbjuda inline-click-beteende | `f3e3e03` |
| ARIA/card-id | Tog bort ogiltigt `aria-labelledby`. | Upstream har giltig `aria-labelledby` med stabilt `uniqueID`. | Ersätt | invalid-aria-commit |
| Modulregistrering och styles | LTS hade äldre bootstrap/autoload. | Upstream kör registrering på `init` och har ny enqueue-yta. | Ersätt | upstreamförändringar |
| Byggartefakter/docs | Release- och byggbrus. | Ska inte flyttas manuellt. | Ej relevant | docs-/assetcommits |

## Risker att verifiera

- Befintligt innehåll kan använda `onClick`; borttagning kan vara en
  bakåtkompatibilitetsbrytning.
- Ikonfältets datamodell skiljer sig mellan LTS select-fält och upstreams
  `icon`-fält.

## Analyskommandon

- `git diff --stat 3.1.5..HEAD`
- `git diff --stat 3.1.5..4.0.24`
- `git diff --stat HEAD..4.0.24`
- `git log --reverse --format='%h%x09%ad%x09%s' --date=short 3.1.5..HEAD`
- `git log --reverse --format='%h%x09%ad%x09%s' --date=short 3.1.5..4.0.24`
- Riktade `git diff`, `git show` och `git grep` för Composer, ACF-export,
  `App`, module bootstrap och contact banner view.
