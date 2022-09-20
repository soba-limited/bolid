import styles from '@/styles/components/copyPrivacy.module.scss'
import { PageTitle } from '@/components';
import PageLayout from '@/components/Layouts/PageLayout'
import Container from '@/components/Layouts/container'

const Privacy = () => {
  return (
    <section className="cont1">
      <PageTitle title="個人情報保護方針" />
      <Container>
        <article className={styles.article}>
          <div className={styles.box}>
            <p>株式会社Bolide's（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
          </div>
          <div className={styles.box}>
            <h3>個人情報の管理</h3>
            <p>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
          </div>
          <div className={styles.box}>
            <h3>個人情報の利用目的</h3>
            <p>お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
          </div>
          <div className={styles.box}>
            <h3>個人情報の第三者への開示・提供の禁止</h3>
            <p>
              当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
              <br/>
              <br/>①お客さまの同意がある場合
              <br/>②お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合
              <br/>③法令に基づき開示することが必要である場合
            </p>
          </div>
          <div className={styles.box}>
            <h3>個人情報の安全対策</h3>
            <p>当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
          </div>
          <div className={styles.box}>
            <h3>ご本人の照会</h3>
            <p>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
          </div>
          <div className={styles.box}>
            <h3>法令、規範の遵守と見直し</h3>
            <p>当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
          </div>
          <div className={styles.box}>
            <h3>お問い合わせ</h3>
            <p>当社の個人情報の取扱に関するお問い合わせは下記までご連絡ください。</p>
          </div>
          <p className={styles.info}>
            株式会社Bolide's
            <br/>〒460-0008　愛知県名古屋市中区栄3丁目35番地34号　栄タワーヒルズ2503号
            <br/><a href="tel:0526782415">TEL.052-678-2415</a>
          </p>
        </article>
      </Container>
    </section>
  );
}

export default Privacy;

Privacy.getLayout = function getLayout(page) {
  return <PageLayout>{page}</PageLayout>
}
