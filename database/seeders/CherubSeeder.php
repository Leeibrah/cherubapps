<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CherubSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('category_post')->truncate();
        DB::table('posts')->truncate();
        DB::table('categories')->truncate();
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $user = User::create([
            'name'     => 'Lee Ibrahim',
            'email'    => 'lee@cherubapps.africa',
            'password' => Hash::make('cherub2025!'),
            'role'     => 'admin',
            'valid'    => 1,
        ]);

        $categories = [];
        foreach ([
            'Strategy',
            'Fintech',
            'AI & Transformation',
            'Infrastructure',
            'Market Expansion',
            'Digital Finance',
        ] as $title) {
            $categories[$title] = Category::create(['title' => $title]);
        }

        $posts = [
            [
                'title'   => 'Why Resilience Is the New Competitive Advantage for African Institutions',
                'excerpt' => 'In an era of increasing digital dependency, African financial institutions that invest in resilience are not just protecting themselves — they are building a durable competitive advantage that compounds over time.',
                'image'   => 'blog-strategy.jpg',
                'cat'     => 'Strategy',
                'body'    => <<<EOT
The business case for resilience has never been stronger. Across Africa's banking, fintech, and telecoms sectors, organizations that have invested in robust, redundant systems are consistently outperforming peers who treated uptime as an operational afterthought.

What does resilience actually mean in practice? It is more than redundant servers or backup generators. True institutional resilience encompasses four interconnected layers: technical architecture, operational processes, human capital, and strategic adaptability. When all four are aligned, organizations can absorb shocks — market volatility, regulatory change, infrastructure disruptions, or cyberattacks — and emerge stronger on the other side.

**The Cost of Downtime is Rising**

A 2024 study of African financial institutions found that the average cost of an unplanned system outage had increased by 67% in three years, driven by three forces: growing transaction volumes, heightened customer expectations from smartphone adoption, and tighter regulatory scrutiny of service availability. For a mid-sized bank processing 500,000 mobile transactions daily, even a two-hour outage represents millions in lost revenue and irreversible reputational damage.

**From Reactive to Proactive**

Most institutions we encounter are still operating in a reactive resilience posture — they respond to failures after they occur. The organizations pulling ahead are those that have shifted to proactive resilience: they run chaos engineering exercises, simulate failure scenarios, and build organizational muscle memory for recovery before any real crisis hits.

**The Competitive Moat**

Customers — particularly SMEs and retail users in Africa's growing digital economy — are making institution selection decisions based on reliability. A bank with demonstrably superior uptime can command premium loyalty, attract fintech partnerships, and expand into new markets with confidence. Resilience, in this framing, is not a cost center but a revenue enabler.

For leadership teams wondering where to start, the answer is almost always the same: begin with a rigorous business impact analysis, map your critical systems, and set honest internal SLAs. The organizations that do this consistently build the kind of infrastructure that wins the next decade.
EOT,
            ],
            [
                'title'   => 'AI Readiness in African Enterprises: Where to Start and What to Avoid',
                'excerpt' => 'Artificial intelligence is not a future technology for African enterprises — it is already here, reshaping competitive dynamics in financial services, agriculture, healthcare, and logistics. The question is no longer whether to adopt AI, but how to do so strategically.',
                'image'   => 'blog-ai.jpg',
                'cat'     => 'AI & Transformation',
                'body'    => <<<EOT
Artificial intelligence presents African enterprises with a rare opportunity: the ability to leapfrog legacy infrastructure and compete globally using tools that are increasingly affordable and accessible. But the gap between organizations that are extracting real AI value and those chasing hype is widening rapidly.

**The Readiness Trap**

Many organizations approach AI with what we call the "readiness trap" — spending months or years building committees, writing strategies, and waiting for perfect data before doing anything. Meanwhile, competitors move faster, learn from smaller experiments, and accumulate the institutional knowledge that compounds into sustainable advantage.

The better approach is what leading AI adopters call "fast-fail, fast-learn": run small, bounded AI pilots with clear success metrics in six to eight weeks. This generates real data about what works in your specific operational context — something no external consultant or vendor can give you in advance.

**Where African Enterprises Should Start**

Based on our work across financial services, telcos, and growth-stage enterprises, the highest-ROI AI entry points are consistently: credit scoring and fraud detection (where labeled data already exists), customer service automation (where call volumes are high and queries are repetitive), and operational forecasting (demand planning, liquidity management).

**What to Avoid**

Avoid starting with transformational or customer-facing use cases that require high explainability in regulated environments. Avoid buying expensive AI platforms before you understand your data maturity. And critically, avoid underinvesting in change management — the organizations that fail at AI adoption almost always underestimate the human and cultural challenge, not the technical one.

**Building for the Long Term**

AI readiness is not a destination but a capability that develops over time. Organizations that invest consistently in data infrastructure, cross-functional AI literacy, and a culture of experimentation will find that each AI initiative builds on the last, creating a compounding advantage. Those that treat AI as a one-time project will be perpetually starting over.
EOT,
            ],
            [
                'title'   => 'Embedded Finance in Africa: The Opportunity Most Fintechs Are Missing',
                'excerpt' => 'Embedded finance — the integration of financial services directly into non-financial platforms and workflows — is reshaping how businesses and consumers across Africa access credit, insurance, payments, and savings.',
                'image'   => 'blog-fintech.jpg',
                'cat'     => 'Fintech',
                'body'    => <<<EOT
The next wave of financial inclusion in Africa will not come from standalone banking apps. It will come from financial services embedded invisibly into the platforms where African consumers and businesses already live: e-commerce marketplaces, ride-hailing apps, supply chain management tools, and agricultural platforms.

Embedded finance is the integration of lending, insurance, payments, and savings into non-financial products — and it represents one of the most significant distribution opportunities in African financial services history.

**Why the Timing Is Right**

Three forces are converging to make embedded finance viable at scale in Africa right now. First, API infrastructure has matured: payments rails, identity verification, and credit bureaux are increasingly accessible through clean developer APIs. Second, super-app models are emerging: platforms with large, engaged user bases are actively looking to monetize through financial services. Third, regulatory frameworks are catching up: sandbox regimes and proportionate licensing in markets like Kenya, Nigeria, Ghana, and Rwanda are making it easier to embed regulated financial products.

**The Opportunity Most Fintechs Are Missing**

Most fintechs are still building direct-to-consumer or direct-to-SME products that compete for the same scarce digital distribution channels. The smarter play — and the one with significantly lower customer acquisition costs — is to become the financial infrastructure layer that other platforms embed.

A fintech that provides white-label lending infrastructure to five agricultural platforms serving 500,000 farmers has a fundamentally more defensible and scalable business than one acquiring those farmers directly.

**What It Takes**

Winning in embedded finance requires three things: enterprise-grade reliability (your institutional partners cannot afford your downtime), clean API design that developers actually want to integrate, and commercial models that align incentives across the distribution chain. Getting all three right is hard — but for the fintechs that do, the embedded finance opportunity in Africa is generational.
EOT,
            ],
            [
                'title'   => 'SMS Failover Architecture: How Leading African Banks Protect Service Uptime',
                'excerpt' => 'For African banks where SMS remains a primary transaction notification and authentication channel, failover architecture is not optional — it is a core resilience requirement that regulators increasingly mandate.',
                'image'   => 'blog-infrastructure.jpg',
                'cat'     => 'Infrastructure',
                'body'    => <<<EOT
SMS may seem like a legacy technology, but for the majority of African banking customers, it remains the most reliable and most trusted digital communication channel. Transaction alerts, one-time passwords, balance queries, and fraud notifications all flow through SMS — making telecoms infrastructure a critical dependency for any African bank.

When that dependency fails, the consequences are immediate and visible: customers cannot complete transactions, OTPs do not arrive, and call center volumes spike. Banks that have experienced major SMS outages describe the experience as "being blind" — unable to communicate with customers at the moment they need reassurance most.

**The Multi-Aggregator Imperative**

The single most important architectural decision in SMS resilience is multi-aggregator routing. Banks that rely on a single SMS aggregator are exposed to that aggregator's uptime, capacity, and technical failures. The solution is routing logic that can detect delivery failure in real time and switch traffic to a secondary (or tertiary) aggregator within seconds.

**Intelligent Failover Design**

Effective SMS failover is not simply toggling from one aggregator to another. It requires: delivery receipt monitoring at the message level, circuit-breaker patterns that detect degraded performance before full failure, priority queuing that ensures OTPs and transaction alerts are processed ahead of marketing messages, and geographic routing logic for cross-border message delivery.

**What Banks Get Wrong**

Most banks test their failover architecture infrequently — often only after an incident. Leading banks run monthly failover drills, measure failover latency precisely, and include SMS resilience metrics in board-level operational risk reporting. This discipline, more than the technical architecture itself, is what separates institutions that handle outages gracefully from those that are caught flat-footed.

The investment required to build and maintain SMS failover architecture is modest compared to the reputational and regulatory cost of a major outage. For banks serving millions of customers, it is one of the highest-return resilience investments available.
EOT,
            ],
            [
                'title'   => 'Expanding Across Africa: Why Strategy Must Come Before Scale',
                'excerpt' => 'The African market is not a single market. It is 54 distinct regulatory environments, dozens of currency regimes, and hundreds of languages and cultural contexts. Organizations that treat pan-African expansion as a single initiative invariably struggle.',
                'image'   => 'blog-market.jpg',
                'cat'     => 'Market Expansion',
                'body'    => <<<EOT
Pan-African expansion is one of the most exciting and most misunderstood strategic opportunities available to digital businesses today. The continent's growing middle class, accelerating smartphone adoption, and improving payments infrastructure create genuine conditions for scale. But the organizations that scale successfully across Africa share a counterintuitive characteristic: they move more slowly and more deliberately at the outset than their ambitions suggest.

**The Single Market Fallacy**

The most common mistake we see in pan-African expansion strategies is treating Africa as a homogeneous market. A digital lending product that works in Kenya — with M-Pesa penetration above 80% and a mature credit bureau — requires fundamental redesign for Nigeria, where mobile money adoption is lower but bank account penetration is different, regulatory requirements diverge sharply, and cultural attitudes toward credit differ significantly.

Organizations that build a single product and attempt to copy-paste it across markets consistently underperform against those that build modular platforms designed for market-specific configuration.

**The Right Sequencing**

Successful African expansion typically follows a pattern: dominate one anchor market completely before entering the second. The temptation to enter multiple markets simultaneously — to "capture the opportunity" — almost always leads to under-resourcing every market and building strong positions in none.

We recommend a sequenced approach: identify your first-and-best market based on regulatory environment, competitive landscape, infrastructure maturity, and strategic fit. Build a defensible position there — not just market share, but regulatory relationships, operational capability, and brand. Then enter market two with a team that has learned from market one.

**Partnerships as Infrastructure**

In most African markets, the fastest path to distribution is through existing trusted networks — banks, MNOs, microfinance institutions, SACCOs, and agricultural cooperatives. Organizations that invest in these partnerships early, even at the cost of margin, build distribution infrastructure that is far more defensible than direct-to-consumer channels.

The organizations winning the pan-African expansion race are not those with the most aggressive timelines. They are those with the clearest strategic logic and the operational discipline to execute it.
EOT,
            ],
            [
                'title'   => 'Digital Finance Infrastructure: Building the Rails Africa\'s Economy Needs',
                'excerpt' => 'The infrastructure layer of Africa\'s digital economy — payments rails, identity systems, credit infrastructure, and interoperability frameworks — is being built right now. The decisions made in the next five years will shape financial access for a generation.',
                'image'   => 'blog-finance.jpg',
                'cat'     => 'Digital Finance',
                'body'    => <<<EOT
Every digital financial service — whether a mobile wallet, a lending app, a cross-border payments solution, or an embedded insurance product — rests on infrastructure. The quality, reliability, and openness of that infrastructure determines what financial services can exist at scale.

Africa is in the middle of a once-in-a-generation infrastructure buildout. Across the continent, national payment switches are being modernized, open banking frameworks are being introduced, digital identity systems are maturing, and real-time payments rails are being deployed. The choices being made in this moment will define what is possible in African digital finance for the next 20 years.

**The Interoperability Imperative**

The single most important infrastructure challenge in African digital finance is interoperability. Fragmented payment ecosystems — where mobile wallets cannot transact with each other or with banks without expensive workarounds — impose enormous costs on consumers and businesses, and constrain the growth of digital financial services.

Markets that have achieved genuine interoperability, like Tanzania with its mobile money interoperability framework, show dramatically higher digital transaction volumes and lower costs. This is not a coincidence. Interoperability creates the conditions for competition on service quality rather than on ecosystem lock-in.

**Credit Infrastructure as a Public Good**

Credit bureaux, alternative credit data systems, and shared fraud databases function as public goods in digital finance ecosystems. Where they are well-developed — as in Kenya, South Africa, and increasingly Ghana — digital lenders can price credit more accurately and extend it more broadly. Where they are absent or poorly maintained, lenders revert to high-cost, high-margin products that exclude the majority of the population.

**What This Means for Institutions**

For banks, fintechs, and development organizations operating in Africa today, engaging actively in infrastructure conversations — through industry associations, regulatory consultations, and direct investment — is not optional. The infrastructure decisions being made now will either enable or constrain your business for years to come. Organizations that treat infrastructure as someone else's problem will find themselves constrained by it.
EOT,
            ],
        ];

        foreach ($posts as $data) {
            $title = $data['title'];
            $slug  = Str::slug($title);
            $cat   = $categories[$data['cat']];

            $post = Post::create([
                'user_id' => $user->id,
                'title'   => $title,
                'slug'    => $slug,
                'excerpt' => $data['excerpt'],
                'body'    => $data['body'],
                'image'   => $data['image'],
                'featured' => false,
            ]);

            DB::table('category_post')->insert([
                'post_id'     => $post->id,
                'category_id' => $cat->id,
            ]);
        }
    }
}
