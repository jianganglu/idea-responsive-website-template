### Glupǰ���Զ�������˵��
 
#### 1��׼������

>�˽̳���windowsϵͳΪ����

**Nodejs**

����[Nodejs����](https://nodejs.org/en/)����������Ҫ�İ汾��windows�����ṩexe��װ�����������˫�����ɰ�װ����ɰ�װ����Ӧ��npmҲ�Ѱ�װ�����°汾������Ҫ���ⰲװ�������Ѱ�װ�����˲��裩

**Git**

����[Git��������ҳ��](http://git-scm.com/download/)����windows�汾��˫�����ɰ�װ�������Ѱ�װ�����˲��裩

**Gulp**

* ȫ�ְ�װGulp��
`npm install -g gulp`

* ��Ϊ��Ŀ�Ŀ���������devDependencies����װ��
`npm install --save-dev gulp`

#### 2��������Ŀ�����������װ

* ͨ��`git clone <url>`��¡��Ŀ��`cd <��Ŀ����>`�������ص���Ŀ��

* ��װ��Ŀ��������(������ؽ����������Գ��Կ���/�رմ�����񣬻��߸������ؾ���)
`npm install`

* ��װ��ĿDemo��ʾ��js�⣨bootstrap,jquery,requirejs��domready��
`bower install`

#### 3�� ��ĿĿ¼˵��

�����������װ�����Ŀ��Ŀ¼���£�

```
|-node_modules
|-src
  |-img
  |-js
  |-sass
  |-vendor
  |-views
|-bower.json
|-gulpfile.js
|-package.json
|-README.md
```

˵����

* node_modules����������������`npm install`����װ���ص�������
* src����Ŀ����Ŀ¼�������img��js��less��vendor��viewsΪǰ����ʹ�õĿ����ļ�Ŀ¼��
* boser.json��js��������������`bower install`��ʱ�򣬾��Ǵ�����ļ���ȡ��Ҫ���ص�js���ļ���
* gulpfile.js��gulp�Զ�����������Ŀ�����������ļ��
* package.json������`npm install`��ʱ�򣬾��ǴӸ��ļ���ȡ�������Ĳ���������ز��ŵ�node_modulesĿ¼�¡�
* README.md����Ŀ˵���ĵ���

>������������`.`��ͷ���ļ����ֱ���`.bowerrc`��`.gitignore`��ǰ���ļ��������ָ����`bower install`ʱ��js���ļ���ŵ�·���������ļ����������git���º�����ʱ�����ͬ�����ļ���

#### 4�� �����������

����Ŀ�Ѿ����ڵ�demoΪ��������gulp���������������������ɲ���`gulpfile.js`�ļ����ݡ�

* `gulp`��Ĭ�������ڿ��������п����д����񡣴����������[http://localhost:8100/views/demo/demo.html](http://localhost:8100/views/demo/demo.html)����[http://localhost:8100/views/](http://localhost:8100/views/)���ɷ���demoҳ�棬�޸Ŀ����ļ�������,��ʵʱˢ����Ŀҳ�档������'bundle', 'minLibCss', 'copyRequirejs', 'less', 'htmlDev', 'connect', 'images','watch' ������

* `gulp prod`�����ɻ�����ʹ�����񣬸����񲢲������ļ��䶯������http������Ҫ������Ŀ��ɺ���ʹ�ã���Ŀ����Ŀ¼��`dist`��������'clean'��'bundle', 'vendorStyles', 'styles', 'rjs', 'images' ������

����������������˵��������ҿ��Բο�`gulp`��`gulp prod`���й����Լ���Ҫ�����񼯺ϣ�

* `rjs`������requirejs�ļ��������ϲ���ѹ����ص�����js���ļ�����Ŀ����Ŀ¼�¡�
* `vendorStyle`���ϲ���ѹ��������������ʽ����Ŀ����Ŀ¼�¡�
* `style`������sass�ļ����ϲ���ѹ������Ŀ����Ŀ¼�¡�
* `htmlDev`�� ���ݿ���������html���ÿ�����ص�js��css�ļ���δѹ������
* `htmlProd`�� ��������������html����������ص�js��css�ļ���ѹ������
* `browser-sync`��http����
* `images`: ͼƬ�ļ��п�������Ŀ����Ŀ¼�£�δ���ͼƬѹ������
* `gulp`������ļ��仯������'images','bundle','less','htmlDev'��


>����������Ҳ���Ե������У�ʹ������`gulp [ser]`�Ϳ��Ե���������������[ser]Ϊ������ܵ�������




