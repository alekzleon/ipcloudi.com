# Contenido, marca y publicidad — IPCloudi

Implementación local realizada el 29 de octubre de 2026. Se conservó Laravel 13, Blade, Tailwind y Vite, sin agregar dependencias. No se modificó el controlador IP, su configuración de proxies, sus rutas API ni sus respuestas. No se publicaron cambios en el hosting de producción.

## Rutas y contenido

- `/guias`: índice HTML con las cinco guías, accesible desde la portada y la navegación.
- `/ip-publica-vs-ip-privada`: 1,316 palabras de contenido editorial.
- `/por-que-cambia-mi-ip`: 1,456 palabras de contenido editorial.
- `/que-pueden-saber-con-mi-ip`: 1,550 palabras de contenido editorial.

Los recuentos excluyen componentes de navegación, relacionados y promoción. Los nuevos artículos incluyen un H1, secciones H2/H3, pasos, ejemplos contextualizados, tabla comparativa, cinco o seis preguntas frecuentes, conclusión y vínculos naturales a las otras guías y la herramienta. Autor editorial: IPCloudi; fecha de publicación: 29 de octubre de 2026. No se inventaron fechas anteriores para los artículos existentes ni se agregó una actualización ficticia a los nuevos.

La dirección 203.0.113.10 se identifica como ejemplo reservado de documentación, no como IP pública de una persona. Se distingue el espacio compartido CGNAT de RFC 1918 y se aclara que comparar WAN/salida no basta para demostrar CGNAT. La guía de privacidad no promete ubicación exacta, acceso automático por conocer una IP ni anonimato completo mediante VPN.

## Archivos creados

- `config/site.php`: nombre, descripción corta e institucional, URL canónica, logo, imagen social, editor y URL comercial real.
- `config/guides.php`: catálogo de cinco artículos y datos editoriales/SEO.
- `resources/views/articles/public-private.blade.php`.
- `resources/views/articles/changing-ip.blade.php`.
- `resources/views/articles/ip-privacy.blade.php`.
- `resources/views/layouts/article.blade.php`: plantilla de lectura con fondo blanco, navegación, autor, fecha y componentes finales.
- `resources/views/pages/guides.blade.php`: índice de guías.
- `resources/views/partials/meta.blade.php`: metadatos compartidos y datos estructurados.
- `resources/views/partials/navigation.blade.php`: Inicio, Guías, Acerca de y Contacto.
- `resources/views/partials/related-articles.blade.php`: enlaces a las otras cuatro guías.
- `resources/views/partials/service-promo.blade.php`: promoción comercial única y reutilizable.
- `tests/Feature/ContentTest.php`: navegación, SEO, sitemap y presentación editorial.
- Este informe.

## Archivos modificados

- `resources/views/home.blade.php`: metadatos centralizados, navegación principal, descripción de marca y enlace a todas las guías. Se retiró el footer interior duplicado y se conservó el footer común. La consulta y sus botones no se modificaron.
- `resources/views/layouts/info.blade.php`: metadatos centralizados y navegación principal.
- `resources/views/pages/ip-lookup.blade.php` y `what-is-my-ip.blade.php`: se conservó el contenido; marca IPCloudi, SEO compartido, navegación, autor editorial, relacionados y promoción final.
- `resources/views/pages/about.blade.php`: descripción institucional solicitada y «Una herramienta de Cloudi».
- `resources/views/partials/footer.blade.php`: identidad, descripción, navegación principal/legal y año dinámico.
- `resources/css/app.css`: tipografía editorial, espacios, tablas con desplazamiento dentro de su contenedor y foco visible.
- `routes/web.php`: índice y tres nuevas rutas públicas Blade. Las rutas API siguen intactas.
- `public/sitemap.xml`: índice y tres artículos nuevos, sin URLs duplicadas.

Privacidad, términos y contacto heredan la navegación y el footer comunes. Sus textos no se reescribieron innecesariamente. La identidad pública principal permanece IPCloudi, con Cloudi como marca creadora.

## Promociones y AdSense

Se reutilizó la URL real `https://tienda.paginas.art`. Cada artículo muestra como máximo una promoción principal al final del contenido, después de los relacionados. Incluye «Servicio de Cloudi», texto descriptivo y enlace «Conocer servicios». Se retiraron los antiguos bloques de ecommerce de las barras laterales. No hay popups ni animaciones nuevas.

La integración real de AdSense permanece en su parcial existente, una vez por página. Se conserva la preferencia de anuncios automáticos expresada por el usuario: no se agregaron slots manuales, IDs inventados, recuadros, anuncios falsos ni espacios vacíos. La configuración efectiva de formatos y exclusiones se controla desde la cuenta de AdSense. La aprobación y la entrega de anuncios no se garantizan.

## SEO

Cada página utiliza un title, description y canonical absoluto sin parámetros; las guías tienen Open Graph de tipo Article, locale es_MX, imagen social, editor IPCloudi y Twitter summary. El logo existente es el favicon e imagen social predeterminada: no se creó una imagen con dimensiones o características ficticias.

Se generan Article y BreadcrumbList mediante JSON correctamente escapado. Los nuevos artículos incluyen fecha de publicación real; las guías anteriores no reciben una fecha de publicación inventada. Las páginas principales tienen metadatos WebSite de Open Graph, sin añadir una organización legal ficticia.

El sitemap mantiene solo URLs públicas existentes; robots.txt no bloquea las rutas nuevas. El contenido y enlaces se renderizan desde Blade sin depender de JavaScript.

## Verificación

- `php artisan test`: 14 pruebas aprobadas, 362 assertions. Incluye las pruebas existentes de consulta IP y los nuevos controles de cinco guías, un H1, script único, metadatos, JSON-LD válido, relacionados, promoción única, enlaces internos y sitemap sin duplicados.
- `node --test tests/js/ip-ui.test.mjs`: tres pruebas aprobadas para la interfaz IP.
- `npm run build`: compilación de producción correcta, sin nuevas dependencias. Permanece el aviso de antigüedad de la base de datos Browserslist.
- `git diff --check`: correcto.
- Chrome headless con perfil temporal: 33 comprobaciones, correspondientes a 11 páginas en 390, 768 y 1440 píxeles. Un H1 y navegación accesible en cada página, CSS aplicado y cero desbordamientos horizontales. La portada conserva el botón de copiar cuando carga el resultado.
- Se inspeccionaron capturas móviles de la portada y del artículo sobre IP pública/privada. Se guardaron seis capturas de portada, índice y artículo en móvil/escritorio en `/private/tmp/ipcloudi-*.png`, y resultados de tamaños en `/private/tmp/ipcloudi-browser-results.json`.
- Las pruebas de navegador bloquearon solicitudes a terceros, incluidos anuncios y analítica, e interceptaron `/api/ip` con una respuesta de documentación. No se generaron impresiones publicitarias de prueba. Las pruebas HTTP del proveedor permanecen simuladas en la suite PHP; esta revisión visual no acredita disponibilidad del proveedor en producción.

## Verificación manual pendiente

- Revisar editorialmente las tres publicaciones y el destino comercial con el propietario.
- Confirmar carga efectiva de anuncios automáticos, consentimiento/CMP y exclusiones en la cuenta real. La prueba visual no cargó anuncios.
- Revisar en dispositivos físicos y con lector de pantalla; los tres tamaños de Chrome no sustituyen todas las combinaciones de navegador y accesibilidad.
- Tras publicar, comprobar HTTPS, assets, sitemap y canonical en `ipcloudi.com`; inspeccionar URLs en Search Console. La validación local no confirma el despliegue público.

## Compilación y despliegue

En el proceso de release del hosting, con respaldo y variables de producción ya configuradas:

```bash
npm ci
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

No ejecutar instalación de desarrollo, generación de clave ni migraciones como parte de este cambio. No incluir `public/hot` de desarrollo en la release: el hosting debe servir `public/build` mediante el manifiesto compilado. Publicar el código, el icono existente y los assets con el mecanismo habitual. Verificar luego la portada, las cinco guías, legales y sitemap. Para revertir, restaurar la release y sus assets anteriores; no usar un reset global del checkout porque contiene cambios previos del usuario.

## Fuentes técnicas utilizadas

- [IANA: rangos privados](https://www.iana.org/help/private-addresses).
- [RFC 1918](https://www.rfc-editor.org/info/rfc1918/).
- [RFC 5737: direcciones de documentación](https://www.rfc-editor.org/info/rfc5737/).
- [RFC 6598: espacio compartido CGNAT](https://www.rfc-editor.org/info/rfc6598/).
- [Microsoft: configuración de red](https://support.microsoft.com/en-gb/windows/experience/connectivity-networking/essential-network-settings-and-tasks-in-windows).
- [Apple: configuración TCP/IP](https://support.apple.com/es-mx/guide/mac-help/mh141292/mac).
- [Google: configuración de red Android](https://support.google.com/android/answer/9654714?hl=es-419).
- [CISA: autenticación multifactor](https://www.cisa.gov/sites/default/files/2024-09/Secure-Our-World-MFA-Tip-Sheet.pdf).
- [Google: anuncios automáticos](https://support.google.com/adsense/answer/9261805?hl=es).
