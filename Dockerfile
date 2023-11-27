FROM bitnami/wordpress:latest

## If you have a mac with m1 chip you should uncomment the next line.
#RUN echo 'Mutex posixsem' >>/opt/bitnami/apache2/conf/httpd.conf

COPY ./plugins/abner_pay ./opt/bitnami/wordpress/wp-content/plugins/abner_pay
COPY ./plugins/woocommerce ./opt/bitnami/wordpress/wp-content/plugins/woocommerce

USER 0

## Install the dependencies via composer.
RUN cd ./opt/bitnami/wordpress/wp-content/plugins/abner_pay && composer i && composer dumpautoload

## Install 'vim'
RUN install_packages vim
## Revert to the original non-root user
RUN chmod g+rwX /opt/bitnami/wordpress
RUN chown -R 1001:1001 /opt/bitnami/wordpress/wp-content/plugins/abner_pay
RUN chown -R 1001:1001 /opt/bitnami/wordpress/wp-content/plugins/woocommerce

USER 1001